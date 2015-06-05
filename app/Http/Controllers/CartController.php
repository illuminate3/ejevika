<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Facade;
use Session;
use App\Model\Product;
use Illuminate\Http\Request;
use Widget;
use Cart;

class CartController extends Controller {

	protected $request;

	
	public function __construct(Request $request){

		$this->request = $request;	
	}
	
	public function postAdd(){
		$count = ($this->request->input('count'))?$this->request->input('count'):1;
		$id = $this->request->input('id');
		$product = Product::where('id','=',$id)->first();
		
		if(!$product->count())
			return 'this product not finde';
		
		Cart::add(
				$product->id,
				$product->name,
				$count,
				$product->price);
	}
	
	public function getShow(){
		$result = Cart::content();
		if($this->request->ajax()){
			return view('cart.index',compact('result'));
		}else{
			return view('cart.index',compact('result'));
		}
	}
	
	public function postRemove(){
		$cartItemId = $this->request->input('id');
		Cart::remove($cartItemId);
	}
	
	public function getMini(){
		
		return Widget::run('CartMini');
	}

}
