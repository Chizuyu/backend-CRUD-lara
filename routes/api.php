<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', function () {
    return response()->json([
        'message' => '      API is working'
    ]);
});

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth::sanctum')->group(function(){
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('products', ProductController::class);
});
