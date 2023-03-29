<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuariosController;

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



