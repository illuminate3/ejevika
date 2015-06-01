<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Menu;
class ProductController extends Controller {

/*
 *@param Collection $product
*/
	public function index($products){

		
		return view('products.index',compact('products'));
	}

}
