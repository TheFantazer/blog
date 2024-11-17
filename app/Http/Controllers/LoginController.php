<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
//        dd(session()->all());
//        $foo = session('foo');
//        dd($foo);

        return view('login.index');

    }
    public function store(Request $request)
    {
//        session(['foo'=>'bar']);
//        dd($session) ;

        session(['alert'=>__('Приветствую вас, мой господин!')]);


        /*if (true) {
            return redirect()->back()->withInput();
        }*/
        return redirect('user');
    }
}
