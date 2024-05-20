<?php

use Illuminate\Support\Facades\Route;
use App\Models\Usuario;

// Route::get('/', function () {return view('index');}); ->middleware (middleware:'auth');;
Route::middleware(['auth'])->get('/', function () {
    return view('index');
});

// Se deshabilito la vista de register aqui
Auth::routes(['register'=>false]);
// Auth::routes(['register' => false]);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->middleware(['auth']);
Route::get('/usuarios/create',[App\Http\Controllers\UsuarioController::class,'create'])->middleware(['auth']);
Route::resource('/usuarios',\App\Http\Controllers\UsuarioController::class);

//Vista de todos los usuarios
// Route::middleware(['auth'])->get('usuarios', function () {
//     $usuarios = Usuario::all();
//     return view('usuarios.index', compact('usuarios'));
// });

// Vista de creacion de usuarios
Route::middleware(['auth'])->get('usuarios/create', function () {
    return view('usuarios.create');
});