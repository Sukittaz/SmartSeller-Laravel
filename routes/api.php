<?php

use Illuminate\Http\Request;
use App\Repositories\ProductRepository as product;

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
Route::group(['prefix' => 'v1/products/'], function () {

    Route::get('/', function () {
        return response()->json(['message' => 'ALL PRODUCTS', 'status' => 'Connected']);
    });

    Route::get('{product}', function ($product) {
        $result = Product::getProductById($product);
        return response()->json($result);
    });

});