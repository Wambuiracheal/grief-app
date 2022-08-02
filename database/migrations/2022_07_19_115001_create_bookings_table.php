<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ClientId')->unsigned();
            $table->foreign('ClientId')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('TrainerId')->unsigned();
            $table->foreign('TrainerId')->references('id')->on('trainers')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('Date');
            $table->string('Duration');
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
        Schema::dropIfExists('bookings');
    }
};
