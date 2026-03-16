<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheatsheetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('categories', CategoryController::class);

Route::resource('cheatsheets', CheatsheetController::class);

Route::get('/search', [SearchController::class, 'index'])->name('search.index');
