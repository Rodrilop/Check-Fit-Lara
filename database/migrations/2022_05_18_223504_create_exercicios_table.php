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
            $table->id();
            $table->string('nm_exercicio',150)->unique();
            $table->string('ds_exercicio',200);
            $table->string('nm_grupo_muscular_exercicio',150);
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
        Schema::dropIfExists('exercicios');
    }
}
