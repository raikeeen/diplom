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
            $table->string('images');
            $table->string('contact');
            $table->integer('userid');
            $table->longText('about');
            $table->date('data');

            $table->integer('idTowns')->unsigned();
            $table->foreign('idTowns')->references('id')->on('towns');

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
