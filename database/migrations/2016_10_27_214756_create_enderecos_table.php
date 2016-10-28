<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->primary('fornecedor_id')->nullable();
            $table->primary('sindico_id')->nullable();
            $table->text('rua');
            $table->string('numero',6);
            $table->text('referencia');
            $table->text('bairro');
            $table->string('cep',12);
            $table->string('uf',2);

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
        Schema::dropIfExists('enderecos');
    }
}
