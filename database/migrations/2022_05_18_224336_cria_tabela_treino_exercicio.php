<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaTreinoExercicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treino_exercicio', function (Blueprint $table) {
            $table->id();
            //----------Chaves Estrangeiras-----------/
            $table->bigInteger('cd_treino')->unsigned();
            $table->foreign('cd_treino')->references('cd_treino')->on('treinos');
            $table->bigInteger('cd_exercicio')->unsigned();
            $table->foreign('cd_exercicio')->references('cd_exercicio')->on('exercicios');
            //----utilizar restrição de unique composta para evitar a redundancia de informação-----//
            $table->unique(['cd_treino','cd_exercicio'],'unica');
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
        Schema::dropIfExists('treino_exercicio');
    }
}
