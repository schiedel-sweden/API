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
Route::POST('/', 'ExcelFileController@store')->middleware('auth');
//Route::get('/get', 'ExcelFileController@store');
/*
* Route for the API
*/
Route::get('/api/excel', 'ExcelFileController@index');

// https://github.com/Maatwebsite/Laravel-Excel
// http://www.maatwebsite.nl/laravel-excel/docs/import
// http://blog.fossasia.org/import-excel-file-data-in-mysql-database-using-php/
// https://stackoverflow.com/questions/31377783/reading-excel-file-and-uploading-to-database-laravel-5
