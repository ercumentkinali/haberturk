<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;


Route::get('/', function () {
    return view('welcome');

});
Route::get('/second-page', function () {
    return view('second-page');
});
Route::get('/detay', function () {
    return view('detay');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/show-image', function () {
    return view('show-image');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/second-page', [App\Http\Controllers\HomeController::class, 'second']);
Route::get('/second-page', [NewsController::class, 'second']);
Route::get('/detay', [NewsController::class, 'detay']);
Route::get('/', [App\Http\Controllers\NewsController::class, 'welcome']);
Route::get('/detay/{id}', [NewsController::class, 'detay']);
Route::get('/news/{id}', [NewsController::class, 'show']);
Route::get('/detay', [NewsController::class, 'show'])->name('detay');















require __DIR__.'/auth.php';
