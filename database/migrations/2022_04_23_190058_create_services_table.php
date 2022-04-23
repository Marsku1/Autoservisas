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
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('miestas');
            $table->string('pavadinimas');
            $table->string('gatve');

        });

        DB::table('services')->insert(
            array(
                'miestas' => 'Kaunas',
                'pavadinimas' => 'Kauno autoservisas',
                'gatve' => 'Kauno g. 1'
            )
        );

        DB::table('services')->insert(
            array(
                'miestas' => 'Vilnius',
                'pavadinimas' => 'Vilniaus autoservisas',
                'gatve' => 'Vilniaus g. 2'
            )
        );

        DB::table('services')->insert(
            array(
                'miestas' => 'Klaipėda',
                'pavadinimas' => 'Klaipėdos autoservisas',
                'gatve' => 'Klapėdos g. 3'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
