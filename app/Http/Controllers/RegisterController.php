<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;

use App\Http\Requests\UsersRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(UsersRequest $user)
    {
        

        return redirect('/dashboard');
    }
}
