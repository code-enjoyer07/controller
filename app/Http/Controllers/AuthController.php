<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        $title = "Login Form";
        return view('login', compact('title'));
    }
}
