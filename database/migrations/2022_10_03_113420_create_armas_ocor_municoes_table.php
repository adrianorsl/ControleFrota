<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmasOcorMunicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armas_ocor_municoes', function (Blueprint $table) {
            $table->timestamps();

            $table->unsignedBigInteger('armas_id');
            $table->foreign('armas_id')->references('id')->on('armas')->onDelete('cascade');
            
            $table->unsignedBigInteger('ocorrencia_id');
            $table->foreign('ocorrencia_id')->references('id')->on('ocorrencias')->onDelete('cascade');
            
            $table->unsignedBigInteger('municoes_id');
            $table->foreign('municoes_id')->references('id')->on('municoes')->onDelete('cascade');
            
            $table->primary(['armas_id','ocorrencia_id','municoes_id']);
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
