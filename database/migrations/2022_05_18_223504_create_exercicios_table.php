<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicios', function (Blueprint $table) {
            $table->id('cd_exercicio');
            $table->string('nm_exercicio',150)->unique();
            $table->string('ds_exercicio',200);
            $table->string('nm_grupo_muscular_exercicio',150);
            $table->timestamps();
            //-----------Criando chave Estrangeira-----------//
            $table->bigInteger('cd_treino')->unsigned();
            $table->foreign('cd_treino')->references('cd_treino')->on('treinos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercicios');
    }
}
