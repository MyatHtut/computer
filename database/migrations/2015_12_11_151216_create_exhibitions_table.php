<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    //ShopList table
    public function up()
    {
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('type');
            $table->string('phone');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exhibitions');
    }
}
