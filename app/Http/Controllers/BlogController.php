<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Posts;
use App\Tags;

class BlogController extends Controller
{
    public function index(Posts $posts)
    {
        $data = $posts->latest()->paginate(5);
        $data_lagi = $posts->latest()->take(2)->get();
        return view('blog', compact('data','data_lagi'));
    }

    public function isiblog($slug, Posts $posts)
    {
        $kategori = Category::all();
        $tag = Tags::all();
        $data = $posts->where('slug', $slug)->get();
        $data_lagi = $posts->latest()->take(2)->get();
        return view('blog.isipost', compact('data','data_lagi','kategori','tag'));
    }

    public function list_category(Category $category, Posts $posts)
    {
        $isi = $category->posts()->count() >= 1;
        if ($isi) {
            $data_lagi = $posts->latest()->take(2)->get();
            $data = $category->posts()->paginate(5);
            return view('blog', compact('data','data_lagi'));
        }
        $data_lagi = $posts->latest()->take(2)->get();
        return view('blog.notpost', compact('data_lagi'));
    }

    public function about(Posts $posts)
    {
        $data_lagi = $posts->latest()->take(2)->get();
        return view('blog.about', compact('data_lagi'));
    }

    public function search(Request $request, Posts $posts)
    {
        $isi = $posts->where('judul', $request->search)->orWhere('judul','like','%'.$request->search.'%')->count() >= 1;
        if ($isi) {
            $data_lagi = $posts->latest()->take(2)->get();
            $data = $posts->where('judul', $request->search)->orWhere('judul','like','%'.$request->search.'%')->paginate(5);
            return view('blog', compact('data_lagi','data'));
        }
        $data_lagi = $posts->latest()->take(2)->get();
        return view('blog.notpost', compact('data_lagi'));
    }
}
