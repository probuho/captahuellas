<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;

// Ruta de inicio
Route::middleware(['auth'])->get('/', function () {
    return view('index');
});

// Autenticación
Auth::routes(['register' => false]);

// Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de usuarios
Route::middleware(['auth'])->group(function () {
    Route::get('/usuarios', [UsuarioController::class, 'index']);
    Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
    Route::resource('usuarios', UsuarioController::class);
});

// Rutas adicionales
Route::match(['get', 'post'], '/usuario', [UsuarioController::class, 'store'])->middleware('auth');

// Vista de creación de usuarios
Route::middleware(['auth'])->get('usuarios/create', function () {
    return view('usuarios.create');
});
