<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tour_id')->nullable();
            $table->string('thumnail_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->longText('gallery')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('short_description')->nullable();
            $table->string('rating')->nullable();
            $table->string('review')->nullable();
            $table->string('time_date')->nullable();
            $table->string('number_of_person')->nullable();
            $table->text('description')->nullable();
            $table->longText('itinerarys')->nullable();
            $table->text('included')->nullable();
            $table->text('exclusions')->nullable();
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('discount_off')->nullable();
            $table->text('important-information')->nullable();
              $table->integer('is_featured')->nullable();
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
        Schema::dropIfExists('tour');
    }
}
