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
    Route::get('home/contacts',[
    	'as' => 'home/contacts',
    	'uses' => 'MainController@contacts'
    	]);
    Route::get('home/map',[
    	'as' => 'home/map',
    	'uses' => 'MainController@map'
    	]);
});