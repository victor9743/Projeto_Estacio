<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque', function (Blueprint $table) {
            $table->id('id');
            $table->integer('idproduto')->unsigned();
            $table->integer('qtdentrada');
            $table->integer('qtdsaida');
            $table->string('dtaentrada', 11);
            $table->string('dtasaida', 11);
            $table->float('valorentrada', 8, 2);
            $table->float('valorsaida', 8, 2);
            $table->string('tipoproduto', 20);
            $table->timestamps();
 
            $table->foreign('idproduto')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
