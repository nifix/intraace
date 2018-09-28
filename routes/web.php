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

Auth::routes();

// Home ?
Route::get('/', 'HomeController@index')->name('home');

// Customers List Routes
Route::get('customers/all', 'CustomersController@showAll')->name('cus.showAll');
Route::get('customers/{id}', 'CustomersController@showCustomersByTeamId')->where('id','[\d]+')->name('cus.showByTeam');
Route::get('customers/{id}/view', 'CustomersController@showCustomerById')->where('id','[\d]+')->name('cus.view');

// Customers test func
Route::get('export/data/customers', 'ExportDataController@test')->name('ajaxGetDataCustomers');

// Customers Datatables - ajax request to return datatables.
Route::get('datatables.data', 'ExportDataController@exportCustomers')->name('datatables.data');
Route::get('datatables/{id}', 'ExportDataController@exportCustomersByTeamId')->name('datatables.databyid');
