<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmallslidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smallsliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('offprice');
            $table->timestamp('count_down')->nullable();
            $table->string('visit');
            $table->mediumText('body');
            $table->string('slider_img')->default('default.jpg');
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
        Schema::dropIfExists('smallsliders');
    }
}
