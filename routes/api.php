<?php

use Illuminate\Http\Request;

/*
* Route for the API
 * adds the prefix /api/
 * ex: /api/excel/
*/
Route::get('/excel', 'ExcelFileController@index');

Route::get('/excel/{sum}', 'ExcelFileController@sum');