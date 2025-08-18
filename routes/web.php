<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SampleController;


Route::get('/hossam-portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/set-language', [PortfolioController::class, 'setLanguage'])->name('portfolio.setLanguage');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
    Route::get('/samples/play/{id}/{token?}', [SampleController::class, 'play'])->name('samples.play');

// Routes for guests (login + register)
Route::middleware('guest')->group(function () {
    Route::get('/auth/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/auth/login', [LoginController::class, 'login']);
    Route::get('/auth/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/auth/register', [RegisterController::class, 'register']);
});

// Routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::resource('admin/samples', SampleController::class);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

