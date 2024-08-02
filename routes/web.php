<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleController;


Route::get('/', [NewsController::class, 'index']);
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/show/{id?}', [NewsController::class, 'show']);

/// artical diye yapıcam haber gelicek yine başka tablodan gelicek
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/show/{id?}', [ArticleController::class, 'show']);
