<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoLubrificantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_lubrificantes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_lubrificante');
            $table->text('dsc_tipo_lubrificante');
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
        Schema::drop('tipo_lubrificantes');
    }
}
