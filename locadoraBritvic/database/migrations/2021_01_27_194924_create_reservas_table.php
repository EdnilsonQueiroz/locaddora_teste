<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('data_saida');
            $table->time('hora_saida');
            $table->date('data_entrada');
            $table->time('hora_entrada');
            $table->integer('veiculo_id')->unsigned();
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
            $table->integer('clientes_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('reservas');
    }
}
