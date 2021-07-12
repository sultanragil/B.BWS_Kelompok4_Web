<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_title', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('title_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->foreign('title_id')->references('id')->on('title');
            $table->foreign('tag_id')->references('id')->on('tag');
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
        Schema::dropIfExists('tag_title');
    }
}
