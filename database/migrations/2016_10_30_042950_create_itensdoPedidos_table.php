<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensdoPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensdoPedidos', function (Blueprint $table) {
            $table->integer('produto_id')->unsigned();
            $table->integer('pedido_id')->unsigned();

            $table->primary(['produto_id', 'pedido_id']);

            $table->foreign('produto_id')->references('id')
                ->on('produtos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('pedido_id')->references('id')
                ->on('pedidos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('quantidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itensdoPedidos');
    }
}
