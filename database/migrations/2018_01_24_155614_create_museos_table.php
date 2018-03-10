<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuseosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('museos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('name')->unique();
            $table->time('horario_apertura');
            $table->time('horario_cierre');
            $table->string('web')->nullable();
            $table->string('social')->nullable();
            $table->string('type');
            $table->string('period');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('museos');
    }
}
