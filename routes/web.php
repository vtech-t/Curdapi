<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::Post('/products', [ProductController::class, 'addproduct']);
Route::get('/products', [ProductController::class, 'showProducts']);

Route::post('/products/delete/{id}', [ProductController::class, 'delete']);
Route::get('/products/edit/{id}', [ProductController::class, 'editProduct']);
Route::post('/products/update/{id}', [ProductController::class, 'updateProduct']);