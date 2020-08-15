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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/products', 'ProductsController');
Route::get('/product/stockcard/{id}', 'ProductsController@stockcard');
Route::resource('/services', 'ServicesController');
Route::resource('/patients', 'PatientsController');
Route::resource('/stockin', 'StockinController');
Route::get('/patient/upload/{id}', 'PatientsController@files');
Route::post('/patient/upload', 'PatientsController@files_upload');

Route::get('/patients_book/{id}', 'PatientsController@book');

Route::get('/patients_today', 'PatientsController@patients_today');


Route::get('/transaction/create/{patient}', 'TransactionController@create');
Route::post('/transaction/store', 'TransactionController@store');
Route::get('/transaction/all', 'TransactionController@list_all');
Route::get('/transaction/patient/list/{patient}', 'TransactionController@list');
Route::get('/transaction/patient/medcert/{id}', 'TransactionController@medcert');
Route::get('/transaction/patient/prescription/{id}', 'TransactionController@prescription');
Route::get('/transaction/patient/receipt/{id}', 'TransactionController@receipt');