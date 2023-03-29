<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function padrao(){
        return view ('layout.padrao');
    }

    public function divulga()
    {
        return view ('sites.divulga');
    }

    public function adotar()
    {
        return view('sites.adotar');
    }
}
