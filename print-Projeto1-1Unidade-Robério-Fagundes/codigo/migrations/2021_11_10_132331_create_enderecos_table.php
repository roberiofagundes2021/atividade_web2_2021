<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('cliente_id');
             $table->string('cidade',100);
             $table->string('estado',100);
             $table->string('bairro',100);
             $table->string('rua',100);
             $table->integer('numero');
             $table->integer('cep');
             $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
