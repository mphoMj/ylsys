<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigners', function (Blueprint $table) {
           $table->increments('id');
            $table->enum('dayOfWeek',['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday']);
            $table->time('timeOfDay');
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
        Schema::dropIfExists('campaigners') ;
    }
}
