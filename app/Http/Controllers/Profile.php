<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Blog;


class Profile extends Controller
{

    protected function store()
    {
        return view('dashboard');
    }

    public function show($user)
    {
        $user = User::where('username', $user)->first();
        return view('profile', ['user' => $user]);
    }
}
