<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourDetailsInsertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_details_insert', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_num')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->time('time')->nullable();
            $table->integer('package_id')->nullable();
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
        Schema::dropIfExists('tour_details_insert');
    }
}
