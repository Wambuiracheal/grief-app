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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            //$table->integer('UserId')->unsigned();
            $table->foreignId('UserId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Name');
            $table->integer('Phone')->nullable();
            $table->string('type_of_loss',100)->nullable();
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
        Schema::dropIfExists('clients');
    }
};
