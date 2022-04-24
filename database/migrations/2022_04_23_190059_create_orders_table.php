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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->date('apsilankymo_data');
            $table->enum('busena', ['priimtas', 'vykdomas', 'užbaigtas', 'atšauktas']);
            $table->string('gedimo_aprasymas');
            $table->unsignedInteger('autoserviso_id');
            $table->foreign('autoserviso_id')->references('id')->on('services')->onDelete('cascade');
            $table->string('marke');
            $table->string('valstybinis_numeris');
            $table->integer('rida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
