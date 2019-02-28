<?php

use Illuminate\Support\Facades\Schema;
use Calormyn\Database\Schema\CalorBlueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordPhrasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_phrases', function (CalorBlueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('submission_id')->unsigned();
            $table->bigInteger('word_type_id')->unsigned();
            $table->string('name',255);
            $table->string('meaning',255);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('word_type_id')->references('id')->on('word_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('word_phrases');
    }
}
