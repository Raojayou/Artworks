<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuseoTable extends Migration
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
            $table->string('name')->unique();
            $table->text('horario_apertura');
            $table->text('horario_cierre');
            $table->string('web');
            $table->string('social');
            $table->string('type');
            $table->string('period')->nullable();;
            $table->text('description')->nullable();;
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