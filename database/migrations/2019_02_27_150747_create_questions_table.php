<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('question_group_id')->unsigned();
            $table->fullString('name');
            $table->fullString('question');
            $table->fullString('question_type');
            if( PHP_VERSION >= '5.7.0' ){
                $table->json('options')->nullable();
            }
            else {
                $table->text('options')->nullable();
            }
            $table->integer('sort_order')->unsigned();
            $table->managedTimestamps();
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
