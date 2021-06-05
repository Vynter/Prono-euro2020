<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePronosticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronostics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pronoD')->nullable();
            $table->integer('pronoE')->nullable();
            $table->integer('status_prono')->nullable();
            $table->timestamp('date_prono')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('pronostic_id')->constrained();
            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->unsignedBigInteger('id_matche');
            //$table->foreign('id_matche')->references('id_matche')->on('matches');
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
        Schema::dropIfExists('pronostics');
    }
}