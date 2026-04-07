<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

// Ruta recibe todas las notas disponibles
Route::get('/note', [NoteController::class, 'index'])->name('note-index');

// Ruta para crear las notas desde un formulario
Route::get('/note/create', [NoteController::class, 'create'])->name('note-create');

// Ruta para recibir y enviar los registros de las notas desde un formulario
Route::post('/note/store', [NoteController::class, 'store'])->name('note-store');

// Ruta para recibir y editar los registros de las notas desde un formulario
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note-edit');

// Ruta para recibir y modificar los registros de las notas desde un formulario
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note-update');

// Ruta para recibir y mostrar los registros de las notas desde un formulario
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note-show');

// Ruta para recibir y borrar los registros de las notas desde un formulario
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note-destroy');
