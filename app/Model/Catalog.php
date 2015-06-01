<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model {
	
	protected $path = 'catalog/';
	
	const ACTIVE = 1;
	const DISABLED = 0;
	
	public function scopeActive($query){
		
		return $query->where('active','=',self::ACTIVE);
	}
	
	public function getSlugAttribute($value){
		return $this->path.$value;
	}

	public function products(){
		return $this->hasMany('App\Model\Product');
	}
	

}
