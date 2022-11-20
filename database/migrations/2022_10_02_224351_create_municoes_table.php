<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municoes', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->timestamps();
            $table->unsignedBigInteger('tipoMunicoes_id');
            $table->foreign('tipoMunicoes_id')->references('id')->on('tipo_municaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municoes');
    }
}
