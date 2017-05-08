<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubleaderAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubleader_attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('inAttendance');
            $table->integer('ClubLeader_ID')->unsigned();
            $table->integer('clubStatistics_Id')->unsigned();
            $table->foreign('clubleader_ID')->references('id')->on('clubleaders');
            $table->foreign('clubStatistics_Id')->references('id')->on('clubStatistics');
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
        Schema::dropIfExists('clubleader_attendances');
    }
}
