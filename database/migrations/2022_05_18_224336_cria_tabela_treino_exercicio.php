<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treino_exercicios', function (Blueprint $table) {
            $table->id();
            $table->string('nm_dia_semana_treino_exercicios',50);
            $table->timestamps();
            //-----------Criando chave Estrangeira-----------//
            $table->bigInteger('treino_id')->unsigned();
            $table->foreign('treino_id')->references('id')->on('treinos');
            $table->bigInteger('exercicio_id')->unsigned();
            $table->foreign('exercicio_id')->references('id')->on('exercicios');
            //-----------Criando Restrição-----------//
            $table->unique(['treino_id','exercicio_id','nm_dia_semana_treino_exercicios'],'restricao');        
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treino_exercicios');
    }
};
