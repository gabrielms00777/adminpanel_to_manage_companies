<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('dashboard.login.index');
    }
    
    public function login(Request $request)
    {
        // Criar validação

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials, $request->remember)){
            return redirect()->route('dashboard.index');
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

    
}
