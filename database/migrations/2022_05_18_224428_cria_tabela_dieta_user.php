<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaDietaUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dieta_user', function (Blueprint $table) {
            $table->id();
            //-----------Criando chave Estrangeira-----------//
            // $table->bigInteger('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId(column: 'user_id')->constrained();
            // $table->bigInteger('dieta_id')->unsigned();
            // $table->foreign('dieta_id')->references('id')->on('dietas');
            $table->foreignId(column: 'dieta_id')->constrained();
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
        Schema::dropIfExists('user_dieta');
    }
}
