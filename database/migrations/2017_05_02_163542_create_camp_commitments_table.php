<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampcommitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campcommitments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campattendee_id')->unsigned();
            $table->integer('loggedby')->unsigned();
            $table->text('story');
            $table->foreign('campattendee_id')->references('id')->on('campattendees');
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
        Schema::dropIfExists('campcommitments');
    }
}
