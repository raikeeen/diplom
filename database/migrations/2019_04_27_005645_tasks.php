<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->longText('about');
            $table->string('price')->default('договорная');
            $table->string('fulfilment')->default('open');

            $table->integer('idTowns')->unsigned();
            $table->foreign('idTowns')->references('id')->on('towns');

            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');

            $table->integer('idAddTask')->unsigned();
            $table->foreign('idAddTask')->references('id')->on('addUserTask');

            $table->integer('idCategory')->unsigned();
            $table->foreign('idCategory')->references('id')->on('category');

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
        Schema::dropIfExists('tasks');

    }
}
