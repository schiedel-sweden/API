<?php
/*
* create a new session view
*/
Route::get('/login', 'SessionsController@create');

/*
* destroy current session
*/
Route::get('/logout', 'SessionsController@destroy');

/*
* create a new user view
*/
Route::get('/register', 'RegistrationController@create');

/*
* store a new user
*/
Route::post('/register', 'RegistrationController@store');
