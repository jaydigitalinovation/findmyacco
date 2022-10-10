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
        Schema::create('education_request', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('amount')->nullable();
            $table->string('country')->nullable();
            $table->string('status')->nullable();
            $table->string('city')->nullable();
            $table->string('startDate')->nullable();
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
        Schema::dropIfExists('education_request');
    }
};
