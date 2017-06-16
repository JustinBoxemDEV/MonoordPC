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

Route::get('/', 'PagesController@index');
Auth::routes();
        
Route::resource('/roster', 'RosterController');
Route::resource('/archive', 'ArchiveController');
Route::resource('/adminpanel', 'AdminPanelController');
Route::resource('/invoice', 'InvoiceController');
Route::resource('/users', 'UsersController');
Route::resource('/bands', 'BandsController');
