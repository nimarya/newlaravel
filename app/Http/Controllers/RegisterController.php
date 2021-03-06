<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|max:255|min:7',
        ]);

        $user = User::create($attributes); // User::setPasswordAttribute runs automatically

        auth()->login($user);

        return redirect('/posts')->with('success', 'Your account has been created.');
    }
}
