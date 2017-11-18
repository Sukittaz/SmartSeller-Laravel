<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('bunch', 'BunchController@index');
Route::get('category', 'CategoryController@index');
Route::get('company', 'CompanyController@index');
Route::get('expense', 'ExpenseController@index');
Route::get('product', 'ProductController@index');
Route::get('purchase', 'PurchaseController@index');
Route::get('sale', 'SaleController@index');
Route::get('supplier', 'SupplierController@index');
Route::get('user', 'UserController@index');
