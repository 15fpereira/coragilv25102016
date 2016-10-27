<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedorsPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedors_pedidos_', function (Blueprint $table) {
            $table->integer('fornecedor_id')->unsigned()->nullable();
            $table->foreign('fornecedor_id')->references('id')
                ->on('fornecedors')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->integer('pedido_id')->unsigned()->nullable();
            $table->foreign('pedido_id')->references('id')
                ->on('pedidos')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->decimal('valorUnit', 8,2);
            $table->decimal('valorTotal', 8,2);
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
        Schema::dropIfExists('fornecedors_pedidos_');
    }
}
