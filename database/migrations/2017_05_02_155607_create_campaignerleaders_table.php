<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignerleadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaignerleaders', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('user_ID')->unsigned();
            $table->integer('campaigner_ID')->unsigned();
            $table->integer('campaignerleadertypes_id')->unsigned();
            $table->foreign('user_ID')->references('id')->on('users');
            $table->foreign('campaigner_ID')->references('id')->on('campaigners');
            $table->foreign('campaignerleadertypes_id')->references('id')->on('campaignerleadertypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaignerleaders');
    }
}
