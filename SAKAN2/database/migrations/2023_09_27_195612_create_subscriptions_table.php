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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->date('duration');
            $table->number('number_of_days');
            $table->number('price_day');
            $table->string('rule1');
            $table->string('rule2');
            $table->string('rule3')->nullable();
            $table->string('rule4')->nullable();
            $table->string('rule5')->nullable();
            $table->integer('price');
            $table->timestamps();

            $table->unsignedBigInteger('admin-id');
            $table->foreign('admin-id')->references('id')->on('admins');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
};
