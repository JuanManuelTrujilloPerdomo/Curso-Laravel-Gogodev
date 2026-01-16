<?php

use Illuminate\Support\Facades\Route;

Route::view('/','landing.index')->name('index'); /*En laravel la raiz es el directorio view, y se llama la capeta y con el punto (.) el archivos */
Route::view('/about','landing.about')->name('about');
