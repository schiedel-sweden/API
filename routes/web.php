<?php

/*
* Route for login, register and password resets
*/
Auth::routes();

/*
* Route for home
*/
Route::get('/', 'HomeController@index')->name('home');

/*
* Route to store excel files in the databse.
*/
Route::POST('/', 'ExcelController@store')->middleware('auth');

/*
* Route for the API
*/
Route::get('/api/excel', 'ExcelController@index');

// https://github.com/Maatwebsite/Laravel-Excel
// http://www.maatwebsite.nl/laravel-excel/docs/import
