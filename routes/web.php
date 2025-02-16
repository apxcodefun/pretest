<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', [HomeController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
    Route::get('/admin/user', [admin::class, 'user'])->name('user');
    Route::get('/admin/book', [admin::class, 'book'])->name('book');
});

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
