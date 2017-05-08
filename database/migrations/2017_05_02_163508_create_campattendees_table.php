<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampattendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campattendees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campinvite_id')->unsigned();
            $table->integer('loggedby')->unsigned();
            $table->foreign('campinvite_id')->references('id')->on('campinvites');
            $table->foreign('loggedby')->references('id')->on('users');
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
        Schema::dropIfExists('campattendees');
    }
}
