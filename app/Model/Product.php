<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	public function catalogs(){
		
		return $this->belongsTo('App\Model\Catalog');
	}

}
