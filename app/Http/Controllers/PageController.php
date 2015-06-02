<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Catalog;
use Illuminate\Support\Facades\Facade;
use App\Model\Product;
class PageController extends Controller {

	/*
	 * return mixed
	 */
	public function index(){

		return view('pages.index');
	}

}
