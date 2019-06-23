<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addUserTask', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser');
            $table->longText('about');

            $table->integer('idTask')->unsigned();
            $table->foreign('idTask')->references('id')->on('tasks');

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
        Schema::dropIfExists('addUserTask');

    }
}
