<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SampleController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/set-language', [PortfolioController::class, 'setLanguage'])->name('portfolio.setLanguage');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');

 Route::resource('samples', SampleController::class);





Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
