<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Facade;
use Session;
use App\Model\Product;
use Illuminate\Http\Request;

use Cart;

class CartController extends Controller {

	protected $request;

	public function __construct(Request $request){

		$this->request = $request;	
	}
	
	public function postAdd(){
		
		$product = Product::find($this->request->input('id'))->first();
		if(!$product->count())
			return 'this product not finde';
		
		Cart::add($product->id,$product->name,1,$product->price);
	}
	
	public function getShow(){
		
		$result = Cart::content();
		
		if($this->request->ajax()){
			return 'ajax';
		}else{
			return view('cart.index',compact('result'));
		}
	}
	

}
