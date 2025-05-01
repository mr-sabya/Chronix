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

// login
Route::get('/login', [App\Http\Controllers\Frontend\Auth\LoginController::class, 'showLoginForm'])->name('login');


// show home page
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home.index');

// about page
Route::get('/about', [App\Http\Controllers\Frontend\PageController::class, 'about'])->name('page.about');
