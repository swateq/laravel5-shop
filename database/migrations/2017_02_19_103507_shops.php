<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Shops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('shops', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('street');
          $table->string('city');
          $table->string('phoneNumber');
          $table->string('email');
          $table->timestamp('created_at');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shops');
    }
}
