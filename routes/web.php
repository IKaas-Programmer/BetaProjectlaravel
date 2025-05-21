<?php

use Illuminate\Support\Facades\Route;
use App\Models\Articles;
use App\Models\ArticlesComment;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('Dashboard.index');
});

Route::get('/dashboard', function () {
    return view('Dashboard.Dashboard');
})->middleware(['auth'])->name('dashboard');

// Articles
Route::get('/articles', [HomeController::class, 'articles'])->name('articles');

//API
Route::get('/api', [HomeController::class, 'api'])->name('api');

//Forms

// Register Form
Route::get('/register', function () {
    return view('Forms.Register');
})->name('Forms.Register');

// Login Form
Route::get('/login', function () {
    return view('Forms.Login');
})->name('login');

// Prosess Login
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login.process');

// Prosess Register
Route::post('/register', [App\Http\Controllers\FormController::class, 'register'])->name('register.process');


// About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Pages
Route::get('/pages', [HomeController::class, 'page'])->name('pages');