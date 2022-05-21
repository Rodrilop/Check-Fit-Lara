<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id('cd_alimento');
            $table->string('nm_alimento',150)->unique();
            $table->string('ds_alimento',250);
            $table->string('nm_categoria_alimento',200);
            $table->timestamps();
            //-----------Criando chave Estrangeira-----------//
            $table->bigInteger('cd_dieta')->unsigned();
            $table->foreign('cd_dieta')->references('cd_dieta')->on('dietas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimentos');
    }
}
