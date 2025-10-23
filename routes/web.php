<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Services
Route::get('/layanan-kami', [ServiceController::class, 'index'])->name('services');

// Articles
Route::get('/artikel', [ArticleController::class, 'index'])->name('articles');

// Contact
Route::get('/hubungi-kami', [ContactController::class, 'index'])->name('contact');
Route::post('/hubungi-kami', [ContactController::class, 'store'])->name('contact.store');

// Register
Route::get('/daftar-online', [RegisterController::class, 'index'])->name('register');
Route::post('/daftar-online', [RegisterController::class, 'store'])->name('register.store');

// Search
Route::get('/pencarian', [SearchController::class, 'index'])->name('search');