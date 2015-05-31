<?php

use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder{
	
	/*
	 * return void
	 */
	
	public function run(){
		
		if(DB::table('catalogs')->exists())
			DB::table('catalogs')->delete();
		$data = [];
		$count = 8;

		for($i=0;$count>$i;$i++){
			$data[]=[
				'slug'=>'section'.$i,
				'name'=>'name'.$i,
				'images'=>'test.png',
				'descriptions'=>'descriptions'.$i,
				'active'=>1
			];
		}
		
		DB::table('catalogs')->insert($data);
	}
}
