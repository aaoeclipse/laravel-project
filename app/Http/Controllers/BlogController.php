<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogcreation');
    }

    public function show($blog)
    {
        $blog = Blog::find($blog);

        return view('blogcreation', ["blog" => $blog]);
    }
}
