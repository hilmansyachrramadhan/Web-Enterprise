<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about');
Route::get('/layanan-kami', [ServiceController::class, 'index'])->name('services');
Route::get('/artikel', [ArticleController::class, 'index'])->name('articles');
Route::get('/hubungi-kami', [ContactController::class, 'index'])->name('contact');
Route::post('/hubungi-kami', [ContactController::class, 'store'])->name('contact.store');
Route::get('/daftar-online', [HomeController::class, 'register'])->name('register');
Route::get('/search', [HomeController::class, 'search'])->name('search');