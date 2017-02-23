<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(createOrders::class);
         $this->call(createUsers::class);
         $this->call(CreateShopsSeed::class);
    }
}
