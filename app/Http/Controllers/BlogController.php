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
        $data = Posts::where('slug', $slug)->get();
        $data_lagi = $posts->latest()->take(2)->get();
        return view('blog.isipost', compact('data','data_lagi','kategori','tag'));
    }
}