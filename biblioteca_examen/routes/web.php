<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\SociosController;
use App\Http\Controllers\PrestamosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('libros', LibroController::class);
Route::resource('socios', SociosController::class);
Route::get('historial/{id}', [PrestamosController::class, 'historial'])->name('historial');
Route::get('prestamo/{id}', [PrestamosController::class, 'prestamo'])->name('prestamo');
