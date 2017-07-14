<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome_veiculo');
            $table->integer('id_tipo_veiculo')->unsigned();
            $table->integer('id_fabricante_veiculo')->unsigned();
            $table->string('modelo_veiculo');
            $table->string('chassi_veiculo');
            $table->string('renavam_veiculo');
            $table->integer('ano_fabricacao_veiculo')->unsigned();
            $table->integer('ano_modelo_veiculo')->unsigned();
            $table->double('valor_aquisicao_veiculo');
            $table->double('valor_atual_veiculo');
            $table->text('dsc_veiculo');
            $table->foreign('id_tipo_veiculo')->references('id')->on('tipo_veiculos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_fabricante_veiculo')->references('id')->on('fabricantes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('veiculos');
    }
}
