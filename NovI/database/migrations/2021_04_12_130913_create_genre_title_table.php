<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_title', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('title_id')->unsigned();
            $table->bigInteger('genre_id')->unsigned();
            $table->foreign('title_id')->references('id')->on('title');
            $table->foreign('genre_id')->references('id')->on('genre');
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
        Schema::dropIfExists('genre_title');
    }
}
