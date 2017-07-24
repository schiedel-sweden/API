<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


// https://github.com/Maatwebsite/Laravel-Excel
// http://www.maatwebsite.nl/laravel-excel/docs/import
