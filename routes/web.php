<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name("blogs.show");


Route::get('/blogs', [BlogController::class, 'index'])->name("blogs.index");