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


/* Routes Login */
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@index');
Route::get('login/logout', 'LoginController@logout');

/* Routes Category */
Route::get('category', 'CategoryController@index');
Route::get('category/add', 'CategoryController@add');
Route::post('category/add', 'CategoryController@add');
Route::get('category/view/{id}', 'CategoryController@view');
Route::get('category/edit/{id}', 'CategoryController@edit');
Route::post('category/edit/{id}', 'CategoryController@edit');

/* Routes Product */
Route::get('product', 'ProductController@index');
Route::get('product/add', 'ProductController@add');
Route::post('product/add', 'ProductController@add');
Route::get('product/view/{id}', 'ProductController@view');
Route::get('product/edit/{id}', 'ProductController@edit');
Route::post('product/edit/{id}', 'ProductController@edit');

/* Routes Expense */
Route::get('expense', 'ExpenseController@index');
Route::get('expense/add', 'ExpenseController@add');
Route::post('expense/add', 'ExpenseController@add');
Route::get('expense/view/{id}', 'ExpenseController@view');
Route::get('expense/edit/{id}', 'ExpenseController@edit');
Route::post('expense/edit/{id}', 'ExpenseController@edit');

/* Routes Costumer */
Route::get('costumer', 'CostumerController@index');
Route::get('costumer/add', 'CostumerController@add');
Route::post('costumer/add', 'CostumerController@add');
Route::get('costumer/view/{id}', 'CostumerController@view');
Route::get('costumer/edit/{id}', 'CostumerController@edit');
Route::post('costumer/edit/{id}', 'CostumerController@edit');

/* Routes Supplier */
Route::get('supplier', 'SupplierController@index');
Route::get('supplier/add', 'SupplierController@add');
Route::post('supplier/add', 'SupplierController@add');
Route::get('supplier/view/{id}', 'SupplierController@view');
Route::get('supplier/edit/{id}', 'SupplierController@edit');
Route::post('supplier/edit/{id}', 'SupplierController@edit');

/* Routes User */
Route::get('user', 'UserController@index');
Route::get('user/add', 'UserController@add');
Route::post('user/add', 'UserController@add');
Route::get('user/view/{id}', 'UserController@view');
Route::get('user/edit/{id}', 'UserController@edit');
Route::post('user/edit/{id}', 'UserController@edit');

/* Routes Company */
Route::get('company', 'CompanyController@index');
Route::get('company/edit/{id}', 'CompanyController@edit');
Route::post('company/edit/{id}', 'CompanyController@edit');

/* Routes Purchase */
Route::get('purchase', 'PurchaseController@index');
Route::get('purchase/add', 'PurchaseController@add');
Route::post('purchase/add', 'PurchaseController@add');

/* Routes Bunch */
Route::get('bunch', 'BunchController@index');
Route::get('bunch/add', 'BunchController@add');
Route::post('bunch/add', 'BunchController@add');
Route::get('bunch/edit/{id}', 'BunchController@edit');
Route::post('bunch/edit/{id}', 'BunchController@edit');

/* Routes PDV */
Route::get('cashier', 'PdvController@index');
Route::get('pdv/pdv', 'PdvController@pdv');

/* Ajax */
Route::get('ajax/searchProduct', 'AjaxController@searchProduct');
Route::get('ajax/searchCostumer', 'AjaxController@searchCostumer');
Route::get('ajax/searchEmployer', 'AjaxController@searchEmployer');




Route::get('sale', 'SaleController@index');
