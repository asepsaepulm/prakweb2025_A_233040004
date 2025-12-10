<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route halaman utama
Route::view('/', 'home'); 

// Route halaman statis
Route::view('/about', 'about');
Route::view('/blog', 'blog');
Route::view('/contact', 'contact');

// Route controller
Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
Route::resource('users', UserController::class);
