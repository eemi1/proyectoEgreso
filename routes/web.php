<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', [RegisterController::class, 'show'])->name('register'); // Toma los valores del formulario.
Route::post('/register', [RegisterController::class, 'register'])->name('register.post'); // Envía los datos del formulario a la clase register


Route::get('/productos', function () {
    return view('products.index');
});


