<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return view('index');}); ->middleware (middleware:'auth');;
Route::middleware(['auth'])->get('/', function () {
    return view('index');
});

// Se deshabilito la vista de register aqui
Auth::routes(['register'=>false]);
// Auth::routes(['register' => false]);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Usuarios', [App\Http\Controllers\UsuarioController::class, 'index']);

// Vista de todos los usuarios
Route::middleware(['auth'])->get('usuarios', function () {
    return view('usuarios.index');
});
// Vista de creacion de usuarios
Route::middleware(['auth'])->get('usuarios/create', function () {
    return view('usuarios.create');
});