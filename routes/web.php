<?php
use Psr\Http\Message\ServerRequestInterface;
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
Route::POST('/', 'ExcelFileController@store')->middleware('auth');
//Route::get('/get', 'ExcelFileController@store');
/*
* Route for the API
*/
Route::get('/api/excel', 'ExcelFileController@index');

Route::get('/api/excel/{sum}', 'ExcelFileController@sum');

// https://stackoverflow.com/questions/43224300/override-default-auth-routes-in-laravel-5-4
