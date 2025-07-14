<?php

use Illuminate\Support\Facades\Route;


Route::post('/register', [App\Http\Controllers\UserController::class, 'store']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

  //users routes
  Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
  Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'findById']);
  Route::get('/me', [App\Http\Controllers\AuthController::class, 'getUserByToken']);


  //categories routes
  Route::post('/create-category', [App\Http\Controllers\CategoryController::class, 'store']);
  Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);

  //products routes
  Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
});
