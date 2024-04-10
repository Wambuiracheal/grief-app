<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('ProgramId');
            $table->foreignId('ProgramId')->references('id')->on('programs')->onDelete('cascade')->onUpdate('cascade');
            //$table->unsignedBigInteger('ClientId');
            $table->foreignId('ClientId')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            //$table->unsignedBigInteger('CounsellorId');
            $table->foreignId('CounsellorId')->references('id')->on('counsellors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sessions');
    }
}
