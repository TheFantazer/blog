<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
      /*  $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $agreement = $request->input('agreement');
        dd($agreement, $name, $email, $password);
        return 'Запрос на регистрацию';*/

        if (true) {
            return redirect()->back()->withInput();
        }

    }
}
