<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seo_title_home')->nullable();
            $table->text('seo_des_home')->nullable();
            $table->text('seo_key_home')->nullable();
            $table->string('seo_image_home')->nullable();
            $table->string('seo_title_about')->nullable();
            $table->text('seo_des_about')->nullable();
            $table->text('seo_key_about')->nullable();
            $table->string('seo_image_about')->nullable();
            $table->string('seo_title_gallery')->nullable();
            $table->text('seo_des_gallery')->nullable();
            $table->text('seo_key_gallery')->nullable();
            $table->string('seo_image_gallery')->nullable();
            $table->string('seo_title_package')->nullable();
            $table->text('seo_des_package')->nullable();
            $table->text('seo_key_package')->nullable();
            $table->string('seo_image_package')->nullable();
            $table->string('seo_title_contact')->nullable();
            $table->text('seo_des_contact')->nullable();
            $table->text('seo_key_contact')->nullable();
            $table->string('seo_image_contact')->nullable();
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
        Schema::dropIfExists('title');
    }
}
