<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/api/excel', 'ExcelController@index');

// https://github.com/Maatwebsite/Laravel-Excel
// http://www.maatwebsite.nl/laravel-excel/docs/import
