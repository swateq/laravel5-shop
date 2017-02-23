<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CreateShopsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('shops')->delete();
      $faker = Faker::create();
        foreach (range(1,10) as $index) {
          DB::table('shops')->insert([
            'name' => $faker->firstName(),
            'street' => $faker->streetName(),
            'city' => $faker->city(),
            'phoneNumber' => $faker->phoneNumber(),
            'email' => $faker->email(),
          ]);
    }
  }
}
