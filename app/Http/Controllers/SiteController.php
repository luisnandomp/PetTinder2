<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function padrao(){
        $publicacoes = Publicacao::latest()->limit(5)->get();
        return view('sites.home', compact('publicacoes'));
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

    public function publicacoes()
    {
        $publicacoes = Publicacao::all();
        return view('sites.publicacoes', compact('publicacoes'));
    }

    public function publicacao(Publicacao $publicacao)
    {
        return view('sites.publicacao', compact('publicacao'));
    }
}
