<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimaisController extends Controller
{


    public function index()
    {
        $animais = Animal::all();
        return view ('animais.index', compact('animais'));
    }

    public function create()
    {
        return view ('animais.create');
    }

}
