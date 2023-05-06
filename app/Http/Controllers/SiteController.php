<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function padrao(){
        return view('sites.home');
    }

    public function quem()
    {
        return view('sites.quem');
    }

    public function patrocinio()
    {
        return view('sites.patrocinio');
    }

    public function contato()
    {
        return view('sites.contato');
    }
}
