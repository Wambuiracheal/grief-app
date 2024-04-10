<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 65);
            $table->string('Day', 65);
            $table->string('Duration', 50);
            //$table->unsignedBigInteger('CounsellorId');
            $table->foreignId('CounsellorId')->references('id')->on('counsellors')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('Price');
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
        Schema::dropIfExists('programs');
    }
}
