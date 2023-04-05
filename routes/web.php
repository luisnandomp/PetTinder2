<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PublicacoesController;
use App\Http\Controllers\AnimaisController;


// ---------------------- TELAS PADRÃO DO SITE -----------------------
Route::get('/', [SiteController::class, 'padrao'])->name('layout.padrao');
Route::get('/divulgacao', [SiteController::class, 'divulga'])->name('sites.divulga');
Route::get('/adotar', [SiteController::class, 'adotar'])->name('sites.adotar');



// ---------------------- USUÁRIOS AQUI --------------------------------------------
Route::get('/usuarios/lista', [UsuariosController::class, 'index'])->name('usuarios.index');

Route::get('/usuario/novo', [UsuariosController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');

Route::get('/usuario/login', [UsuariosController::class, 'login'])->name('usuarios.login');
Route::get('/Usuarios/{usuario}', [UsuariosController::class, 'show'])->name('usuarios.show');
Route::put('/Usuarios/{usuario}/update', [UsuariosController::class, 'update'])->name('usuarios.update');
Route::get('/Usuarios/{usuario}/editar', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::delete('Usuarios/{usuario}',[UsuariosController::class, 'destroy'])->name('usuarios.destroy');

// ---------------------- PUBLICAÇÕES AQUI --------------------------------------------

Route::get('/publicacao/lista', [PublicacoesController::class, 'index'])->name('publicacoes.index');
Route::get('/publicacao/novo', [PublicacoesController::class, 'create'])->name('publicacoes.create');
Route::post('/publicacoes', [PublicacoesController::class, 'store'])->name('publicacoes.store');
Route::get('/publicacoes/{publicacao}', [PublicacoesController::class, 'show'])->name('publicacoes.show');
Route::put('/publicacoes/{publicacao}/update', [PublicacoesController::class, 'update'])->name('publicacoes.update');
Route::get('/publicacoes/{publicacao}/editar', [PublicacoesController::class, 'edit'])->name('publicacoes.edit');
Route::delete('publicacoes/{publicacao}',[PublicacoesController::class, 'destroy'])->name('publicacoes.destroy');

// ---------------------- ANIMAIS AQUI --------------------------------------------
Route::get('/animais/lista', [AnimaisController::class, 'index'])->name('animais.index');

Route::get('/animais/novo', [AnimaisController::class, 'create'])->name('animais.create');
Route::post('/animais', [AnimaisController::class, 'store'])->name('animais.store');
Route::get('/animais/{animal}', [AnimaisController::class, 'show'])->name('animais.show');
Route::put('/animais/{animal}/update', [AnimaisController::class, 'update'])->name('animais.update');
Route::get('/animais/{animal}/editar', [AnimaisController::class, 'edit'])->name('animais.edit');
Route::delete('animais/{animal}',[AnimaisController::class, 'destroy'])->name('animais.destroy');



