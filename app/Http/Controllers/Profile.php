<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class Profile extends Controller
{

    protected function store()
    {

        $user = Auth::user();
        return view('dashboard', ['user' => $user]);
    }

    public function show($user)
    {
        $user = User::where('username', $user)->first();
        return view('profile', ['user' => $user]);
    }
}
