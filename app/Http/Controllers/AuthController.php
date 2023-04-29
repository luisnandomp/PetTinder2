<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){


    if(!Auth::attempt(['email' => $request->email, 'password' => $request->senha])){

        }

        return redirect()->route('layout.padrao');
    }

    public function logout(){

    }
}
