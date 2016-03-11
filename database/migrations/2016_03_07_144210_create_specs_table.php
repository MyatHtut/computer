<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('os');
            $table->string('color');
            $table->string('cpu');
            $table->string('gcard');
            $table->string('ram');
            $table->string('storage');
            $table->string('other');
            $table->string('shop');
            $table->string('brand');
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
        Schema::drop('specs');
    }
}
