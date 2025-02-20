<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credenciales = $request->only('name', 'password');
        if (Auth::attempt($credenciales))
    {
        return redirect()->intended(route('libros.index'));
    } else {
        $error = 'Usuario incorrecto';
        return view('auth.login', compact('error'));
    }
    }
    public function loginForm()
    {
        return view('auth.login');
    }
    public function logout()
    {
        
        return view('auth.login');
    }
}
