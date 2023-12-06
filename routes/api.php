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

//post adalah endpoint nya, PostController adalah nama controller untuk route yang akan dibuat, index adalah nama methodnya
Route::get('/show2/{id}', [PostController::class, 'show2']);
Route::get('/show/{id}', [PostController::class, 'show']);
Route::get('/postsResource', [PostController::class, 'getResource']);
Route::get('/posts', [PostController::class, 'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
