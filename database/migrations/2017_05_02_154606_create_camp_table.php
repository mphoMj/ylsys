<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //CREATION OF THE camp table
        Schema::create('camps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campname');
            $table->string('campvenue');
            $table->string('campfee');
            $table->date('startdate');
            $table->date('enddate');
            $table->integer('camptype_id')->unsigned();
            $table->foreign('camptype_id')->references('id')->on('camptypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('camps');
    }
}
