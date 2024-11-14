<?php

use App\Http\Controllers\BarCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/**
 * Home Routes
 */
Route::resource('/', HomeController::class);

/**
 * Blog Routes
 */
Route::resource('/blogs', BlogController::class);

/**
 * Category Routes
 */
Route::resource('/categories', CategoryController::class);

/**
 * Comment Routes
 */
Route::resource("/comments", CommentController::class);

/**
 * NewsLetter Routes
 */

Route::resource('/newsletter', NewsLetterController::class);

/**
 * Search Route
 */

 Route::get('/search', [SearchController::class, 'search'])->name('search.results');


 /**
  * Contact Route
  */

 Route::resource('/contacts', ContactController::class);

 /**
  * Teams Route
  */

 Route::resource('/teams', TeamController::class);