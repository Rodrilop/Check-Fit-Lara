<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaDietaAlimento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dieta_alimento', function (Blueprint $table) {
            $table->id();        
            //----------Chaves Estrangeiras-----------/
            $table->bigInteger('cd_dieta')->unsigned();
            $table->foreign('cd_dieta')->references('cd_dieta')->on('dietas');
            $table->bigInteger('cd_alimento')->unsigned();
            $table->foreign('cd_alimento')->references('cd_alimento')->on('alimentos');
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
        Schema::dropIfExists('dieta_alimento');
    }
}
