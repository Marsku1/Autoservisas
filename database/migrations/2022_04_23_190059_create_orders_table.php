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
            $table->id();
            $table->date('apsilankymo_data');
            $table->enum('data', ['priimtas', 'vykdomas', 'uzbaigtas', 'atsauktas']);
            $table->unsignedBigInteger('autoserviso_id');
            $table->foreign('autoserviso_id')->references('id')->on('services');
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
