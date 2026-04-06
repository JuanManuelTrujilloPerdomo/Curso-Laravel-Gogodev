<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

// Ruta recibe todas las notas disponibles
Route::get('/note', [NoteController::class, 'index'])->name('note-index');

// Ruta para crear las notas desde un formulario
Route::get('/note/create', [NoteController::class, 'create'])->name('note-create');

// Ruta para recibir y enviar los registros de las notas desde un formulario
Route::post('/note/store', [NoteController::class, 'store'])->name('note-store');
