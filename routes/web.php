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

Route::get('pdf', function(){
    $pdf = \PDF::loadHTML(view('adminpanel'));
    return $pdf->stream();
});

Route::get('/', 'PagesController@index');
Route::get('/archive2', 'ArchiveController@index2');
Route::get('/invoices/{invoice}/pdf', 'InvoiceController@generatePDF');

Route::resource('/roster', 'RosterController');
Route::resource('/archive', 'ArchiveController');
Route::resource('/adminpanel', 'AdminPanelController');
Route::resource('/invoice', 'InvoiceController');
Route::resource('/users', 'UsersController');
Route::resource('/bands', 'BandsController');
