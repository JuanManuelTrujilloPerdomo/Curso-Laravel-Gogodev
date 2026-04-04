<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Ruta para poder visualizar el index de la vista usuarios
Route::get('/', [UserController::class, 'index'])->name('user-index');

// Ruta para crear datos en la tabla de usuarios
Route::get('/create', [UserController::class, 'create'])->name('user-create');
