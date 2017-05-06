<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignerleaderStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaignerleader_Statistics', function (Blueprint $table) {
            //
            $table->increments('ID');
            $table->boolean('inAttendance');
            $table->integer('CampaignerLeader_ID')->unsigned();
            $table->integer('campaignerstatistics_Id')->unsigned();
            $table->foreign('CampaignerLeader_ID')->references('id')->on('CampaignerLeaders');
            $table->foreign('campaignerstatistics_Id')->references('id')->on('campaignerstatistics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaignerleader_Statistics');
    }
}
