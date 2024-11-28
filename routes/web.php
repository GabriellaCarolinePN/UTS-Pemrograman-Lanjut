<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');

