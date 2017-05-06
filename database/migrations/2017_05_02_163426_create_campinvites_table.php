<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampinvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campinvites', function (Blueprint $table) {
            $table->increments('id');
            $table->date('inviteDate');
            $table->integer('recruitment_id')->unsigned();
            $table->integer('camp_id')->unsigned();
            $table->foreign('recruitment_id')->references('id')->on('recruitments');
            $table->foreign('camp_id')->references('id')->on('camps');
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
        Schema::dropIfExists('campinvites');
    }
}
