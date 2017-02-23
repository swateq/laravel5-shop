<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class createUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
		$faker = Faker::create();
        DB::table('users')->insert([
            'name' => 'Rafal Filek',
            'email'=> 'rafal.filek@hotmail.com',
            'password'=>md5('ksiezniczka'),
            'permission'=>'1',
            'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
            ]);
    	foreach (range(1,100) as $index) {
        DB::table('users')->insert([
        	'name' => $faker->firstName(),
        	'email'=>$faker->email(),
        	'password'=>$faker->md5(),
        	'permission'=>$faker->numberBetween($min=0,$max=1),
        	'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
	    	]);
   	    }
        
    }
}
