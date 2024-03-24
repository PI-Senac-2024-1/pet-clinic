<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;

use App\Http\Requests\UsersRequest;
use App\Services\UserServices;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(UsersRequest $request)
    {
        UserServices::register($request->all());

        return redirect('/dashboard');
    }
}
