<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model {
	public function pages(){	

		$pages = DB::table('pages')->order_by('page_parent', 'desc')->order_by('page_numeration', 'desc')->get();
		
		return $pages;

	}
	
	// public function dropdowns(){

	// 	$dropdowns = DB::table('pages')->where('page_parent', '!=', '0')->order_by('page_parent', 'desc')-get();

	// 	return $dropdowns;

	// }
}
