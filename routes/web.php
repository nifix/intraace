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

/*
*   Route for home page !
*/

Route::get('/', 'HomeController@index')->name('home');

/*
*   Routes for customers page.
*/
Route::get('customers/all', 'CustomersController@showAll')->name('cus.showAll');
Route::get('customers/{id}', 'CustomersController@showCustomersByTeamId')->where('id','[\d]+')->name('cus.showByTeam');
Route::get('customers/{id}/view', 'CustomersController@showCustomerById')->where('id','[\d]+')->name('cus.view');

/*
*   Route to test ajax datatables.
*/
Route::get('export/data/customers', 'ExportDataController@test')->name('ajaxGetDataCustomers');

/*
*   Routes used for ajax queries on the customers view.
*/
Route::get('datatables.data', 'ExportDataController@exportCustomers')->name('datatables.data');
Route::get('datatables/{id}', 'ExportDataController@exportCustomersByTeamId')->name('datatables.databyid');
