<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PublicacoesController;
use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\FiltroController;
use App\Http\Controllers\AuthController;


// ---------------------- AUTENTICADOR -----------------------
Route::middleware(['web'])->group(function () {

// -------------------- Filtro de animais -----------------------------------------
    Route::any('/publicacao/busca', [PublicacoesController::class, 'buscar'])->name('publicacoes.buscar'); // tela onde vai ser o filtro
    Route::get('/entrar', [AuthController::class, 'entrar'])->name('login'); //tela de login do usuário
    Route::post('/entrar', [AuthController::class, 'login_store'])->name('login_store'); //tela de login do usuário
    Route::get('/sair', [AuthController::class, 'logout'])->name('sair');

// ---------------------- TELAS PADRÃO DO SITE -----------------------
    Route::get('/', [SiteController::class, 'padrao'])->name('layout.padrao'); //tela inicial da pagina
    Route::get('/divulgacao', [SiteController::class, 'divulga'])->name('sites.divulga');
    Route::get('/adotar', [SiteController::class, 'adotar'])->name('sites.adotar');
});





Route::middleware(['auth:usr'])->group(function () {
// ---------------------- USUÁRIOS AQUI --------------------------------------------

    Route::get('/usuarios/lista', [UsuariosController::class, 'index'])->name('usuarios.index');//tela onde veremos todos os usuários cadastrados
    Route::get('/usuario/novo', [UsuariosController::class, 'create'])->name('usuarios.create');//tela onde vamos cadastrar os usuários
    Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
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

});



