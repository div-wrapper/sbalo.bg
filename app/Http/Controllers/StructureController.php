<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class StructureController extends Controller {

	public function index()
	{
		return view('pages/structure.structure');
	}

	public function first_inner($id){
		$first_inner = DB::table('structure')->where('otdel', ''.$id.'')->get();
		return view('pages/structure/structure_first', compact('first_inner'));
	}
	public function second_inner($id1, $id2){
		$second_inner = DB::table('structure')->where('otdel', $id2)->get();
		return view('pages/structure/structure_second', compact('second_inner'));
	}
}
