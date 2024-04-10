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
        Schema::create('counsellors', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('UserId');
            $table->foreignId('UserId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Name',25);
            $table->integer('Phone');
            $table->string('Sector',20);
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
        Schema::dropIfExists('counsellors');
    }
};