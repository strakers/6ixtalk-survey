<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordPhraseRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_phrase_ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('submission_id')->unsigned();
            $table->bigInteger('word_phrase_id')->unsigned();
            $table->tinyInteger('rating')->default(0);
            $table->fullString('correction')->nullable();
            $table->fullString('theme')->nullable();
            $table->fullString('region')->nullable();
            $table->managedTimestamps();
            $table->softDeletes();
            $table->foreign('submission_id')->references('id')->on('submissions');
            $table->foreign('word_phrase_id')->references('id')->on('word_phrases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('word_phrase_ratings');
    }
}
