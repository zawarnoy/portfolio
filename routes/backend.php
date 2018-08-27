<?php

Route::group(['prefix' => 'backend', 'as' => 'backend'], function () {




    Route::get('/', 'BackendController@index');



});


