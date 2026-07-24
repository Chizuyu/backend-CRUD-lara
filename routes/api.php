
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', function () {
    return response()->json([
        'message' => '      API is working'
    ]);
});

Route::apiResource('products', ProductController::class);
