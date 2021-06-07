<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('scoreD')->nullable();
            $table->integer('scoreE')->nullable();
            $table->integer('status_matche')->nullable();
            $table->timestamp('date_matche')->nullable();
            //$table->unsignedBigInteger('id_type');
            //$table->foreign('id_type')->references('id_type')->on('type_matches');
            $table->unsignedBigInteger('equipeD_id');
            $table->foreign('equipeD_id')->references('id')->on('equipes');
            $table->unsignedBigInteger('equipeE_id');
            $table->foreign('equipeE_id')->references('id')->on('equipes');
            $table->foreignId('type_id')->constrained();
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
        Schema::dropIfExists('matches');
    }
}