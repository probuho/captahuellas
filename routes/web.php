<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;

// Ruta raíz
Route::middleware(['auth'])->get('/', function () {
    return view('index');
});

// Habilitar la ruta de registro
Auth::routes();

// Ruta para redirigir al usuario después del registro
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Otras rutas
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->middleware(['auth']);
Route::get('/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->middleware(['auth']);
Route::resource('/usuarios', UsuarioController::class)->middleware(['auth']);
Route::match(['get', 'post'], '/usuario', [App\Http\Controllers\UsuarioController::class, 'store']);

// Vista de creación de usuarios
Route::middleware(['auth'])->get('usuarios/create', function () {
    return view('usuarios.create');
});


// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UsuarioController;
// use App\Models\Usuario;
// use Illuminate\Support\Facades\Auth;

// // Route::get('/', function () {return view('index');}); ->middleware (middleware:'auth');;
// Route::middleware(['auth'])->get('/', function () {
//     return view('index');
// });

// // Se deshabilito la vista de register aqui
// Auth::routes();
// Route::get('/ruta', 'ApprovedController@metodo');
// // Auth::routes(['register' => false]);


// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->middleware(['auth']);
// Route::get('/usuarios/create',[App\Http\Controllers\UsuarioController::class,'create'])->middleware(['auth']);
// Route::resource('/usuarios',UsuarioController::class)->middleware(['auth']);
// //Route::post('/usuario', [UsuarioController::class, 'store'])->middleware(['auth']);
// //Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create')->middleware('auth');
// //Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store')->middleware('auth');
// Route::match(['get', 'post'], '/usuario', [App\Http\Controllers\UsuarioController::class, 'store']);


// //Vista de todos los usuarios
// // Route::middleware(['auth'])->get('usuarios', function () {
// //     $usuarios = Usuario::all();
// //     return view('usuarios.index', compact('usuarios'));
// // });

// // Vista de creacion de usuarios
// Route::middleware(['auth'])->get('usuarios/create', function () {
//     return view('usuarios.create');
// });

// // Route::middleware(['auth', 'approved'])->get('/', function () {
// //     return view('index');
// // });

