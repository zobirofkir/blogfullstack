<?php

use App\Http\Controllers\BarCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\SearchController;
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
Route::get('/categories', [CategoryController::class, 'index'])->name("categories.index");


/**
 * Show Category
 */
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name("category.show");


/**
 * Get All Comments
 */
Route::get("/comments", [CommentController::class, "index"])->name("comments.index");

/**
 * Post Comment
 */
Route::post("/comments", [CommentController::class, "store"])->name("comments.store");


/**
 * Post News Letter
 */

Route::post('/newsletter', [NewsLetterController::class, 'store'])->name('newsletter.store');



/**
 * Search Route
 */

 Route::get('/search', [SearchController::class, 'search'])->name('search.results');


 /**
  * Contact Route
  */

 Route::resource('/contacts', ContactController::class);