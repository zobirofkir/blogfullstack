<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * Home Page
 */
Route::get('/', [HomeController::class, 'index']);

/**
 * List All Blogs
 */
Route::get('/blogs', [BlogController::class, 'index'])->name("blogs.index");

/**
 * Show Single Blog
 */
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name("blogs.show");

/**
 * Get Categories
 */
Route::get('/categories', [CategoryController::class, 'index'])->name("blogs.index");


/**
 * Show Category
 */
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name("category.show");