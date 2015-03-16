<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Pages;
class MainController extends Controller {

	public function index(){
		$pages = Pages::get();
		return view('pages/home/home', compact('pages'));
	}
	public function contacts(){
		return view('pages/home/contacts');
	}
	public function map(){
		return view('pages/home/map');
	}
}
