<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clubname');
            $table->enum('dayOfWeek',['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday']);
            $table->time('timeOfDay');
            $table->date('started_on');
            $table->integer('team_id')->unsigned();
            $table->integer('clubType_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('clubType_id')->references('id')->on('clubTypes');
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
        Schema::dropIfExists('clubs');
    }
}
