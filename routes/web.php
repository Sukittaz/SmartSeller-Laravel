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


/* Routes Category */
Route::get('category', 'CategoryController@index');
Route::get('category/add', 'CategoryController@add');
Route::post('category/add', 'CategoryController@add');

/* Routes Product */
Route::get('product', 'ProductController@index');
Route::get('product/add', 'ProductController@add');
Route::post('product/add', 'ProductController@add');

/* Routes Expense */
Route::get('expense', 'ExpenseController@index');
Route::get('expense/add', 'ExpenseController@add');
Route::post('expense/add', 'ExpenseController@add');

/* Routes User */
Route::get('user', 'UserController@index');
Route::get('user/add', 'UserController@add');
Route::post('user/add', 'UserController@add');

/* Routes Costumer */
Route::get('costumer', 'CostumerController@index');
Route::get('costumer/add', 'CostumerController@add');
Route::post('costumer/add', 'CostumerController@add');

/* Routes Supplier */
Route::get('supplier', 'SupplierController@index');
Route::get('supplier/add', 'SupplierController@add');
Route::post('supplier/add', 'SupplierController@add');

/* Routes Supplier */
Route::get('company', 'CompanyController@index');


Route::get('bunch', 'BunchController@index');
Route::get('purchase', 'PurchaseController@index');
Route::get('sale', 'SaleController@index');
