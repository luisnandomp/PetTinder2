<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PublicacoesController;
use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\FiltroController;


// ---------------------- TELAS PADRÃO DO SITE -----------------------
Route::get('/', [SiteController::class, 'padrao'])->name('layout.padrao');
Route::get('/divulgacao', [SiteController::class, 'divulga'])->name('sites.divulga');
Route::get('/adotar', [SiteController::class, 'adotar'])->name('sites.adotar');



// ---------------------- USUÁRIOS AQUI --------------------------------------------
Route::get('/usuarios/lista', [UsuariosController::class, 'index'])->name('usuarios.index');//tela onde veremos todos os usuários cadastrados

Route::get('/usuario/novo', [UsuariosController::class, 'create'])->name('usuarios.create');//tela onde vamos cadastrar os usuários
Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');

Route::get('/usuario/login', [UsuariosController::class, 'login'])->name('usuarios.login'); //tela de login do usuário
Route::get('/Usuarios/{usuario}', [UsuariosController::class, 'show'])->name('usuarios.show'); // tela onde vai exibir o perfil de cada usuário
Route::put('/Usuarios/{usuario}/update', [UsuariosController::class, 'update'])->name('usuarios.update');
Route::get('/Usuarios/{usuario}/editar', [UsuariosController::class, 'edit'])->name('usuarios.edit');// tela onde vamos editar cada perfil de usuário
Route::delete('Usuarios/{usuario}',[UsuariosController::class, 'destroy'])->name('usuarios.destroy');

// ---------------------- PUBLICAÇÕES AQUI --------------------------------------------

Route::get('/publicacao/lista', [PublicacoesController::class, 'index'])->name('publicacoes.index'); // tela onde vai mostrar todas as publicações
Route::get('/publicacao/novo', [PublicacoesController::class, 'create'])->name('publicacoes.create');//tela para cadastrar uma publicação
Route::post('/publicacoes', [PublicacoesController::class, 'store'])->name('publicacoes.store');
Route::get('/publicacoes/{publicacao}', [PublicacoesController::class, 'show'])->name('publicacoes.show'); //tela de mostrar cada publicação unicamente
Route::put('/publicacoes/{publicacao}/update', [PublicacoesController::class, 'update'])->name('publicacoes.update');
Route::get('/publicacoes/{publicacao}/editar', [PublicacoesController::class, 'edit'])->name('publicacoes.edit'); //tela onde iremos editar cada publicação
Route::delete('publicacoes/{publicacao}',[PublicacoesController::class, 'destroy'])->name('publicacoes.destroy');

// ---------------------- ANIMAIS AQUI --------------------------------------------
Route::get('/animais/lista', [AnimaisController::class, 'index'])->name('animais.index'); // tela onde mostrará todos os animais

Route::get('/animais/novo', [AnimaisController::class, 'create'])->name('animais.create'); //tela de cadastro de animais
Route::post('/animais', [AnimaisController::class, 'store'])->name('animais.store');
Route::get('/animais/{animal}', [AnimaisController::class, 'show'])->name('animais.show'); //tela onde mostrará o perfil de cada animal unicamente
Route::put('/animais/{animal}/update', [AnimaisController::class, 'update'])->name('animais.update');
Route::get('/animais/{animal}/editar', [AnimaisController::class, 'edit'])->name('animais.edit'); // tela onde vamos editar o perfil de cada animal
Route::delete('animais/{animal}',[AnimaisController::class, 'destroy'])->name('animais.destroy'); // botão de deletar


// -------------------- Filtro de animais -----------------------------------------

Route::get('/filtro/adocao', [FiltroController::class, 'index'])->name('filtro.index');

Route::get('/filtro', [FiltroController::class, 'create'])->name('filtro.create');

