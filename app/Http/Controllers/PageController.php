<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Catalog;

class PageController extends Controller {

	/*
	 * return mixed
	 */
	public function index(){
		
		return view('pages.index');
	}

}
