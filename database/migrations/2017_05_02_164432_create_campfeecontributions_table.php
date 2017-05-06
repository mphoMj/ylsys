<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampFeeContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campfeecontributions', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount',10,2);
            $table->string('paidby');
            $table->string('contactnumber');
            $table->string('receivedby');
            $table->date('date');
            $table->integer('campinvite_id')->unsigned();
            $table->integer('loggedby')->unsigned();
            $table->text('description');
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
        Schema::dropIfExists('campfeecontributions');
    }
}
