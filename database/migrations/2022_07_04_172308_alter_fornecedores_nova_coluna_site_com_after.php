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
        //Adicionando uma coluna chamada site após a coluna nome
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('site', 150)->after('nome')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Excluindo a coluna
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropColumn('site'); 
        });
    }
};
