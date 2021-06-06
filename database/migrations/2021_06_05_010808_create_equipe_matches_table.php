<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipeMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipe_matche', function (Blueprint $table) {
            //$table->unsignedInteger('equipe_id');
            //$table->unsignedInteger('matche_id');
            $table->foreignId('matche_id')->constrained();
            $table->foreignId('equipe_id')->constrained();

            //$table->foreign('id_equipe')->references('equipes')->on('equipe_id');
            //$table->foreign('id_matche')->references('matches')->on('matche_id');
            $table->primary(['matche_id', 'equipe_id']);
            $table->boolean('host')->nullable();
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
        Schema::dropIfExists('equipe_matche');
    }
}