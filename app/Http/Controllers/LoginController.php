<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function index()
    {
        return view('login.index');
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request)
    {
        if(!Auth::attempt($request->only(['name', 'password']))){
            return redirect()->back()->withErrors('Usuario ou senha inválidos');
        }

        return redirect()->route('ocorrencia.index');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
