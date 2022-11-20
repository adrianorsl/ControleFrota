<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrochecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrochecks', function (Blueprint $table) {
            $table->unsignedBigInteger('ocorrencia_id');
            $table->foreign('ocorrencia_id')->references('id')->on('ocorrencias');
            $table->primary('ocorrencia_id');
            $table->integer('capo');
            $table->integer('paralamaDianteiro_esq');
            $table->integer('paralamaDianteiro_dir');
            $table->integer('paralamaTraseiro_esq');
            $table->integer('paralamaTraseiro_dir');
            $table->integer('parachoqueDianteiro');
            $table->integer('portaDianteira_esq');
            $table->integer('portaDianteira_dir');
            $table->integer('portaTraseira_esq');
            $table->integer('portaTraseira_dir');
            $table->integer('luzDianteira');
            $table->integer('luzTraseira');
            $table->integer('parachoqueTraseiro');
            $table->integer('giroflex');
            $table->integer('vidro');
            $table->integer('interno');
            $table->integer('impressora');
            $table->integer('smartphone');
            $table->integer('motor');
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
        Schema::dropIfExists('carrochecks');
    }
}
