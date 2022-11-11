<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            $validated = $request->validate([
                'title' => 'required|max:255',
                'body' => 'required',
            ]);

            Blog::create([
                'title' => $request->input('title'),
                'subtitle' => "dummysub",
                "body" => $request->input('body'),
                "user_id" => Auth::id()
            ]);

            return redirect((route('dashboard')));
        }
        return redirect((route('/')));
    }

    public function show($blog)
    {
        $blog = Blog::find($blog);

        return view('blogcreation', ["blog" => $blog]);
    }

    public function create()
    {
        return view('blogcreation');
    }
}
