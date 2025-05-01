<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// show dashboard
Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');

// show analytics
Route::get('/analytics', [App\Http\Controllers\Backend\AnalyticsController::class, 'index'])->name('analytics');

// category
Route::get('/category', [App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('category.index');

// news
Route::get('/news', [App\Http\Controllers\Backend\NewsController::class, 'index'])->name('news.index');

