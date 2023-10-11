<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//categories
Route::middleware('auth:sanctum')->post('categories/create', [\App\Http\Controllers\CategoryController::class, 'store']);
Route::middleware('auth:sanctum')->get('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show']);
Route::middleware('auth:sanctum')->put('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'update']);
Route::middleware('auth:sanctum')->delete('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy']);


Route::middleware('auth:sanctum')->post('logout', [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'destroy']);
Route::post('register', [\Laravel\Fortify\Http\Controllers\RegisteredUserController::class, 'store']);
Route::post('login', [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'store']);



Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index']);
