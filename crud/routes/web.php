<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

// Ruta recibe un valor como un ID de forma dinámica
Route::get('/note/{id}', [NoteController::class, 'index'])->name('note-index');

