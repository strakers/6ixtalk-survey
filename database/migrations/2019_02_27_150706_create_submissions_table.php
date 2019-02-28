<?php

use Illuminate\Support\Facades\Schema;
use Calormyn\Database\Schema\CalorBlueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (CalorBlueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('age',255)->nullable();
            $table->string('gender',255)->nullable();
            $table->string('location',255)->nullable();
            $table->string('nationality',255)->nullable();
            $table->ipAddress('ip_address');
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
        Schema::dropIfExists('submissions');
    }
}
