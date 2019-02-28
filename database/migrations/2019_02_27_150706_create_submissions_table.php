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
            $table->fullString('name');
            $table->fullString('age')->nullable();
            $table->fullString('gender')->nullable();
            $table->fullString('location')->nullable();
            $table->fullString('nationality')->nullable();
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
