<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class CurrentController extends Controller {

	public function index()
	{
		$news = DB::table('news')->get();
		return view('pages/current.current', compact('news'));
	}

}
