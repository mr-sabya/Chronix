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
Route::get('/register', [App\Http\Controllers\Frontend\Auth\RegisterController::class, 'showRegisterForm'])->name('register');


// show home page
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

// about page
Route::get('/about', [App\Http\Controllers\Frontend\PageController::class, 'about'])->name('page.about');

// profile page
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\Frontend\Auth\ProfileController::class, 'index'])->name('profile.index');
});
