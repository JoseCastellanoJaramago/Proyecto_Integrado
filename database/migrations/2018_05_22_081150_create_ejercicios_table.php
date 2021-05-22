<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('ejercicio1')->nullable();
            $table->string('ejercicio2')->nullable();
            $table->string('ejercicio3')->nullable();
            $table->string('ejercicio4')->nullable();
            $table->string('ejercicio5')->nullable();
            $table->string('ejercicio6')->nullable();
            $table->string('ejercicio7')->nullable();
            $table->string('ejercicio8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejercicios');
    }
}
