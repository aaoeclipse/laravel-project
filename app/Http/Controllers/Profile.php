<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Blog;

class Profile extends Controller
{
    public function index($user)
    {

        $user = User::find($user);
        return view('profile', ['user' => $user]);
    }
}
