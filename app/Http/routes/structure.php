<?php

Route::group(['before' => 'structure'], function(){
	Route::get('structure/{id}', 'StructureController@first_inner');
	Route::get('structure/{id1}/{id2}', 'StructureController@second_inner');
});