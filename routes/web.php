<?php
/*
* create a new session view
*/
Route::get('/login', 'SessionsController@create');

/*
* create a new user view
*/
Route::get('/register', 'RegistrationController@create');

/*
* store a new user
*/
Route::get('/register', 'RegistrationController@store');
