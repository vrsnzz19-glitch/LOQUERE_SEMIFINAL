<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LibraryController::class, 'home'])->name('home');
Route::get('/catalog', [LibraryController::class, 'catalog'])->name('catalog');
Route::get('/about', [LibraryController::class, 'about'])->name('about');
