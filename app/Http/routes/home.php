<?php

Route::group(['before' => 'home'], function(){
    Route::get('home',[
        'as' => 'home',
        'uses' => 'MainController@index'
    ]);
    Route::get('/',[
    	'as' => '/',
    	'uses' => 'MainController@index'
    	]);
});