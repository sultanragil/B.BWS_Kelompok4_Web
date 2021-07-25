<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter', function (Blueprint $table) {
            $table->id('id');
            $table->string('chapter_title');
            $table->text('chapter_text');
            // $table->string('chapter_tts');
            $table->integer('view')->default(0);
            $table->bigInteger('title_id')->unsigned();
            $table->timestamps();
            $table->foreign('title_id')->references('id')->on('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter');
    }
}
