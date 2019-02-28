<?php

use Illuminate\Support\Facades\Schema;
use Calormyn\Database\Schema\CalorBlueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_groups', function (CalorBlueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->integer('sort_order')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_groups');
    }
}
