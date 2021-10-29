<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarioEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendario_eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_evento', 100);
            $table->date('dt_evemto');
            $table->integer('qtd_interessados');
            $table->string('local_coleta', 100);
            $table->string('entidade_coletora', 50);
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
        Schema::dropIfExists('calendario_eventos');
    }
}
