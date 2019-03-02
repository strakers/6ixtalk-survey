<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('submissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->fullString('name');
            $table->bigInteger('generated_name_id')->nullable();
            $table->fullString('age')->nullable();
            $table->fullString('gender')->nullable();
            $table->tinyInteger('used_binary_gender')->nullable();
            $table->fullString('location')->nullable();
            $table->fullString('nationality')->nullable();
            $table->fullString('email_address')->nullable();
            $table->ipAddress('ip_address');
            $table->managedTimestamps();
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
