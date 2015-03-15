<?php
Route::get('current',[
    	'as' => 'current',
    	'uses' => 'CurrentController@index'
    	]);