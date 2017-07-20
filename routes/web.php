<?php
/*
* create a new session
*/
Route::get('/login', 'SessionsController@create');

/*
* create a new user
*/
Route::get('/register', 'RegistrationController@create');
