<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;


Route::get('/', [NewsController::class, 'index']);
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/show/{categorySlug}/{id}-{titleSlug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/category/{slug}', [NewsController::class, 'showByCategory'])->name('category.show');

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/show/{id?}', [ArticleController::class, 'show']);
