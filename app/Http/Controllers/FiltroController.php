<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filtro;


class FiltroController extends Controller
{
    public function index()
    {
        return view ('filtro.index');
    }

    public function create()
    {
        return view ('filtro.create');
    }

}
