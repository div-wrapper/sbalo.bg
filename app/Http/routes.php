<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('structure', 'StructureController@index');
foreach(File::allFiles(__DIR__.'/routes') as $partial){
	if ($partial) {
    	require_once $partial->getPathname();
	}else{
		View::make('pages/404');
	}

}

