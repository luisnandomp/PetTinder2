<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    public function entrar(Request $request){
        return view('usuarios.entrar');
    }

    public function login_store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        if(!Auth::attempt(['email' => $request->email, 'password' => $request->senha])){
            throw ValidationExecpetion::withMessages([
                'email' => __('auth.falied'),
            ]);
        }

        return redirect()->route('layout.padrao');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
