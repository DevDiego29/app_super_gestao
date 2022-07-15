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
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->id(); //indentificador único de cada registro
            $table->timestamps();
            $table->string('nome', 50); //parâmetros(nome e tamanho)
            $table->string('telefone', 20);
            $table->string('email', 80);
            $table->integer('motivo_contato');
            $table->text('mensagem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //permite reverter a migration
    {
        Schema::dropIfExists('site_contatos');
    }
};
