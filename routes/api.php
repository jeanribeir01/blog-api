<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('status', function (){
    return response()->json(['status'=> 'ok']);
}); 

Route::post ('posts', [PostController ::class, 'status']);

Route::get ('posts', [PostController ::class, 'index']);
Route::post ('posts', [PostController ::class, 'store']);