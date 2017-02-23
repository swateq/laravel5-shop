<?php
namespace Models\App;

class admin extends Eloquent{
	public static $table='products';

	public function all() {
		$products = DB::select('select * from products order by id desc');
    	return $products;
  	}
}

?>