<?php

namespace App\Http\Controllers;

use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tags::where('users_id', auth()->id())->paginate(10);
        $us = Auth::user()->id;
        return view('tag.index', compact('tag','us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tag.create');
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
            'name' => 'required|max:20|min:5',
        ]);

        $tag = Tags::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'users_id'    => Auth::id(),
        ]);
        return redirect()->back()->with('success','Kategori Berhasil di Simpan');
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
        $tag = Tags::findorfail($id);
        return view('tag.edit', compact('tag'));
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
            'name' => 'required|max:20|min:5',
        ]);

        $tag_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'users_id'    => Auth::id(),
        ];

        Tags::whereId($id)->update($tag_data);

        return redirect()->route('tag.index')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tags::findorfail($id);
        $tag->delete();

        return redirect()->back()->with('success','Data Berhasil di Hapus');
    }
}
