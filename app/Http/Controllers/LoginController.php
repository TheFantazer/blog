<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {/*
        $ip = $request->ip();
        dd($ip);
        $email = $request->input('email');
        $password = $request->input('password');
        $agreement = $request->boolean('agreement');
        dd($email, $password, $agreement);*/
//        return response()->redirectToRoute('/foo');
        return redirect()->route('user');
//        return 'Запрос на вход';
    }
}
