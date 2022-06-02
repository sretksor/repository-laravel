<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//CATEGORY
Route::prefix('v1')->group(function () {
    Route::resource('categories', 'App\Http\Controllers\CategoryController')->except(['create', 'edit']);
});

//POST
Route::prefix('v1')->group(function () {
    Route::resource('posts', 'App\Http\Controllers\PostController')->except(['create', 'edit']);
    Route::get('search', [PostController::class, 'search']);
});