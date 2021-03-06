<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Posts::where('users_id', auth()->id())->paginate(10);
        $us = Auth::user()->id;
        return view('post.index', compact('post','us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tags::all();
        $category = Category::all();
        return view('post.create', compact('category','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'       => 'required',
            'category_id' => 'required',
            'content'     => 'required',
            'gambar'      => 'required',
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $post = Posts::create([
            'judul'       => $request->judul,
            'category_id' => $request->category_id,
            'content'     => $request->content,
            'gambar'      => 'public/uploads/posts/'.$new_gambar,
            'slug'        => Str::slug($request->judul),
            'users_id'    => Auth::id(),
        ]);

        $post->tags()->attach($request->tags);

        $gambar->move('public/uploads/posts/', $new_gambar);
        return redirect()->back()->with('success','Postingan berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $tags = Tags::all();
        $post = Posts::findorfail($id);
        return view('post.edit', compact('post','tags','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'       => 'required',
            'category_id' => 'required',
            'content'     => 'required',
        ]);

        $post = Posts::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('public/uploads/posts/', $new_gambar);

            $post_data = [
                'judul'       => $request->judul,
                'category_id' => $request->category_id,
                'content'     => $request->content,
                'gambar'      => 'public/uploads/posts/'.$new_gambar,
                'slug'        => Str::slug($request->judul),
                'users_id'    => Auth::id(),
            ];
        } else {
            $post_data = [
                'judul'       => $request->judul,
                'category_id' => $request->category_id,
                'content'     => $request->content,
                'slug'        => Str::slug($request->judul),
                'users_id'    => Auth::id(),
            ];
        }

        $post->tags()->sync($request->tags);
        $post->update($post_data);

        return redirect()->route('post.index')->with('success','Postingan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::findorfail($id);
        $post->delete();

        return redirect()->back()->with('success','Postingan Berhasil di Hapus');
    }
}
