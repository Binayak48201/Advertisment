<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertismentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisments', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('slug')->unique();
            $table->unsignedInteger('channel_id');
            $table->integer('brand_id')->default(0);
            $table->unsignedInteger('visits')->default(0);
            $table->string('title');
            $table->string('place');
            $table->string('direct')->nullable();
            $table->string('discount')->nullable();
            $table->timestamp('count_down')->nullable();
            $table->string('str_price')->nullable();
            $table->float('price')->nullable();
            $table->string('adv_img')->default('default.jpg');
            $table->mediumText('body');
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
        Schema::dropIfExists('advertisments');
    }
}
