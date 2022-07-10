<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|max:255|min:7',
        ]);
    }
}
