<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_photos', function (Blueprint $table) {
            $table->increments('photo_id');
            $table->string('photo_date');
            $table->string('photo_title');
            $table->string('photo_text');
            $table->string('photo_upload');
            $table->unsignedInteger('post_id');
            $table->foreign('post_id')->references('post_id')->on('tb_post');
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
        Schema::dropIfExists('tb_photos');
    }
}
