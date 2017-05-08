<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubleadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubleaders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_ID')->unsigned();
            $table->integer('club_ID')->unsigned();
            $table->foreign('user_ID')->references('id')->on('users');
            $table->foreign('club_ID')->references('id')->on('clubs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubleaders');
    }
}
