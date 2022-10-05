<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmasOcorrenciasMunicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armas_ocorrencias_municoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('armas_id');
            $table->foreign('armas_id')->references('id')->on('armas');
            $table->unsignedBigInteger('ocorrencias_id');
            $table->foreign('ocorrencias_id')->references('id')->on('ocorrencias');
            $table->unsignedBigInteger('municoes_id');
            $table->foreign('municoes_id')->references('id')->on('municoes');
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
        Schema::dropIfExists('armas_ocorrencias_municoes');
    }
}
