<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatesMetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates_mets', function (Blueprint $table) {
            $table->increments('id');
            $table->date('datemet');
            $table->integer('recruitment_id')->unsigned();
            $table->integer('loggedby')->unsigned();
            $table->foreign('recruitment_id')->references('id')->on('recruitments');
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
        Schema::dropIfExists('dates_mets');
    }
}
