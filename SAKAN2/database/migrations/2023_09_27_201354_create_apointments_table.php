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
        Schema::create('apointments', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->date('hours');
  
            $table->string('full_name');
            $table->integer('phone');
            $table->string('email')->nullable();
            $table->string('message')->nullable();
      
            $table->unsignedBigInteger('customer-id')->nullable();
            $table->foreign('customer-id')->references('id')->on('customers');

            $table->unsignedBigInteger('home-id')->nullable();
            $table->foreign('home-id')->references('id')->on('homes');

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
        Schema::dropIfExists('apointments');
    }
};
