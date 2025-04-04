<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use lluminate\Http\Client\ConnectionException;

Route::get('/', function () {   
    return view('welcome');
})->name('welcome');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

 

Route::apiResource('products', ProductController::class);