<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_images', function (Blueprint $table) {
            $table->bigInteger('news_id')->unsigned();
            $table->foreign('news_id')
                  ->references('id')
                  ->on('news')
                  ->onDelete('cascade');
            
            $table->bigInteger('image_id')->unsigned();
            $table->foreign('image_id')
                  ->references('id')
                  ->on('images')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_images');
    }
}
