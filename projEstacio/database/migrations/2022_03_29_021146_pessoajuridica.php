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
        Schema::create('pessoajuridica', function (Blueprint $table) {
            
            $table->increments('id');
            $table->enum('validadorpessoajuridica', ['2']);
            $table->string('nome', 100);
            $table->string('cnpj', 18)->unique();
            $table->json('telefone');
            $table->json('endereco');
            $table->json('cep');
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
        //
    }
};
