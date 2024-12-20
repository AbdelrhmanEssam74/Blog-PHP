<?php

use App\Controllers\BlogController;
use App\Controllers\CategoriesController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\UserController;
use App\Controllers\SignupController;
use PROJECT\HTTP\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/store', [SignupController::class, 'store']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/categories/', [CategoriesController::class, 'index']);
Route::get('/categories/world', [CategoriesController::class, 'world']);
Route::get('/categories/technology', [CategoriesController::class, 'technology']);
Route::get('/blog/articles', [BlogController::class, 'articles']);