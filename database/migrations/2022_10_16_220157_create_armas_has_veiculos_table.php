<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmasHasVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armas_has_veiculos', function (Blueprint $table) {
            $table->timestamps();

            $table->unsignedBigInteger('armas_id');
            $table->foreign('armas_id')->references('id')->on('armas')->onDelete('cascade');

            $table->unsignedBigInteger('veiculo_id');
            $table->foreign('veiculo_id')->references('id')->on('veiculos')->onDelete('cascade');
        
            $table->primary(['armasid','veiculo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armas_has_veiculos');
    }
}
