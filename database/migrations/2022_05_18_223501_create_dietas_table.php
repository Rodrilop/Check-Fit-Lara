<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dietas', function (Blueprint $table) {
            $table->id();
            $table->string('nm_dieta',150)->unique();
            $table->decimal('qt_alimento_dieta',4,2);
            $table->date('dt_inicio_dieta');
            $table->string('nm_dia_semana_dieta',50);
            $table->string('nm_periodo_dieta');
            $table->date('dt_termino_dieta');
            $table->timestamps();
            //-----------Criando chave Estrangeira-----------//
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dietas');
    }
}
