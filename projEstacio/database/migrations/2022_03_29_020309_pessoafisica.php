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
        Schema::create('pessoafisica', function (Blueprint $table) {
            
            $table->increments('id');
            $table->enum('validadorpessoafisica', ['1']);
            $table->string('nome', 100);
            $table->string('cpf', 14)->unique();
            $table->json('telefone');
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
