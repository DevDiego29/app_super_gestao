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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->timestamps(); //criou as colunas created_at e updated_at
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        //remove um schema (tabela) caso essa tabela exista, ele faz um teste prévio
        Schema::dropIfExists('fornecedores');
        //remove sem fazer um teste prévio
        //Schema::drop('fornecedores');
    }
};
