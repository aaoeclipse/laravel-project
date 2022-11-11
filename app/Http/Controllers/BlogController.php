<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function store()
    {
        return view('blogcreation');
    }

    public function show($blog)
    {
        $blog = Blog::find($blog);

        return view('blogcreation', ["blog" => $blog]);
    }
}
