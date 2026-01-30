<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', blogController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('admin', AdminController::class);
// Route::get('/castegories/{categorie}', [CategoriesController::class]); 