<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doadors', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50);
            $table->date('dt_nascimento');
            $table->string('endereco', 100);
            $table->integer('num_residencia');
            $table->bigInteger('telefone');
            $table->string('cidade_doacao', 50);
            $table->string('tipo_sanguineo');
           // $table->bigInteger('usuario_id')->unsigned();
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
        Schema::dropIfExists('doadors');
    }
}
