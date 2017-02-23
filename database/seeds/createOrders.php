<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class createOrders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->delete();
		$faker = Faker::create();
    	foreach (range(1,10) as $index) {
        DB::table('orders')->insert([
        	'user_id' => $faker->numberBetween(1,10),
        	'price'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
	    	]);
   	    }
    }
}
