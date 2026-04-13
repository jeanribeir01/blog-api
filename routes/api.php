<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('status', function () {
    return response()->json(['status' => 'ok']);
});

Route::get('posts', [PostController::class, 'index']);
Route::post('posts', [PostController::class, 'store']);