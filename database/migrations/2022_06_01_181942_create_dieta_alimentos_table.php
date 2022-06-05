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
        Schema::create('dieta_alimentos', function (Blueprint $table) {
            $table->id();
            $table->decimal('qt_dieta_alimentos',4,2);
            $table->string('nm_unidade_alimentos',10);
            $table->string('nm_dia_semana_dieta_alimentos',50);
            $table->string('nm_periodo_dieta_alimentos',50);
            $table->timestamps();
            //-----------Criando chave Estrangeira-----------//
            $table->bigInteger('dieta_id')->unsigned();
            $table->foreign('dieta_id')->references('id')->on('dietas');
            $table->bigInteger('alimento_id')->unsigned();
            $table->foreign('alimento_id')->references('id')->on('alimentos');
            //-----------Criando Restrição-----------//
            $table->unique(['dieta_id','alimento_id','nm_dia_semana_dieta_alimentos','nm_periodo_dieta_alimentos'],'restricao');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dieta_alimentos');
    }
};
