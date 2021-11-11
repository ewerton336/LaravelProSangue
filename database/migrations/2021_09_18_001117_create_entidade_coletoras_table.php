<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadeColetorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidade_coletoras', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->bigInteger('telefone');
            $table->string('nome_responsavel');
            $table->timestamps();
            //$table->bigInteger('usuario_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidade_coletoras');
    }
}
