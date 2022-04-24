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
        Schema::create('car_profiles', function (Blueprint $table) {
            $table->id();
            $table->string("make");
            $table->string("model");
            $table->string("fuel_type");
            $table->integer("year");
            $table->string("number_plate");
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
        Schema::dropIfExists('car_profiles');
    }
};
