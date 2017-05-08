<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignerstatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaignerstatistics', function (Blueprint $table) {
            $table->increments('id');
            $table->date('campaignerDate');
            $table->integer('NoOfFemaleAdolescents');
            $table->integer('NoOfMaleAdolescents');
            $table->integer('campaigner_id')->unsigned();
            $table->foreign('campaigner_id')->references('id')->on('campaigners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaignerstatistics') ;
    }
}
