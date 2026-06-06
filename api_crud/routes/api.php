<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController; 

// Ruta de API para un CRUD
Route::resource('/note', NoteController::class);
