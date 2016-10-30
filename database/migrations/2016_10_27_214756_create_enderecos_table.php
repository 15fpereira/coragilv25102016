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
            $table->integer('fornecedor_id')->unsigned();
            $table->integer('sindico_id')->unsigned();

            $table->text('rua');
            $table->string('numero',6);
            $table->text('referencia');
            $table->text('bairro');
            $table->string('cep',12);
            $table->string('uf',2);

            $table->foreign('fornecedor_id')->references('id')
                ->on('fornecedors')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('sindico_id')->references('id')
                ->on('sindicos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
