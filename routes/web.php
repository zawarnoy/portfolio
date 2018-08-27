<?php



Route::get('/', 'FrontendController@index');

Route::post('/mailSending', 'FrontendController@mailSending');