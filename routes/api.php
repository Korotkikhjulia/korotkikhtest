<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\PublicProductController;

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

Route::apiResource('products', ProductController::class);
Route::apiResource('product-categories', ProductCategoryController::class);

Route::get('/public/products', [PublicProductController::class, 'index']);
Route::get('/public/products/{product:slug}', [PublicProductController::class, 'show']);

Route::get('/public/product_categories', [PublicProductController::class, 'index2']);
Route::get('/public/categories-with-products', [PublicProductController::class, 'categoriesWithProducts']);
