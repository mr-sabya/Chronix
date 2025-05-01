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

Route::middleware(['auth', 'admin'])->group(function () {
    // show dashboard
    Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');

    // show analytics
    Route::get('/analytics', [App\Http\Controllers\Backend\AnalyticsController::class, 'index'])->name('analytics');

    // category
    Route::get('/category', [App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('category.index');

    // news
    Route::get('/news', [App\Http\Controllers\Backend\NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [App\Http\Controllers\Backend\NewsController::class, 'create'])->name('news.create');
    Route::get('/news/edit/{id}', [App\Http\Controllers\Backend\NewsController::class, 'edit'])->name('news.edit');

    // tag
    Route::get('/tag', [App\Http\Controllers\Backend\TagController::class, 'index'])->name('tag.index');

    // pages
    Route::get('/pages', [App\Http\Controllers\Backend\PageController::class, 'index'])->name('page.index');

    Route::get('/page/create', [App\Http\Controllers\Backend\PageController::class, 'create'])->name('page.create');
});
