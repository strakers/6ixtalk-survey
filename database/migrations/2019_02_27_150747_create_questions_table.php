<?php

use Illuminate\Support\Facades\Schema;
use Calormyn\Database\Schema\CalorBlueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (CalorBlueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('question_group_id')->unsigned();
            $table->fullString('name');
            $table->fullString('question');
            $table->fullString('question_type');
            $table->json('options')->nullable();
            $table->integer('sort_order')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('question_group_id')->references('id')->on('question_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
