<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePedidosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produto_id')->unsigned();
            $table->integer('qtd_pedida');
            $table->date('data_pedido');
            $table->string('solicitante');
            $table->string('solicitante_cep', 9);
            $table->enum('solicitante_uf', ['AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO']);
            $table->string('solicitante_municipio');
            $table->string('solicitante_bairro');
            $table->string('solicitante_rua');
            $table->string('solicitante_numero', 5);
            $table->string('solicitante_complemento');
            $table->string('despachante');
            $table->enum('situacao', ['Pendente de envio','Enviado','Entregue']);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedidos');
    }
}
