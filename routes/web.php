<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController; // <-- ADICIONADO AQUI
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Rotas Públicas
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('site.landing');
})->name('home');

Route::get('/api-docs', function () {
    return view('site.api-docs');
})->name('api.docs');

/*
|--------------------------------------------------------------------------
| Autenticação (Registro e Login)
|--------------------------------------------------------------------------
*/

// Registro
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Login
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

/*
|--------------------------------------------------------------------------
| Área Autenticada
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/dashboard', function () {
    $totalUsers = User::count();
    return view('admin.dashboard', compact('totalUsers'));
})->middleware('auth')->name('dashboard');

Route::get('/appointments', function () {
    return view('admin.appointments');
})->middleware('auth')->name('appointments.index');

Route::get('/clients', function () {
    return view('admin.clients');
})->name('clients.index');

