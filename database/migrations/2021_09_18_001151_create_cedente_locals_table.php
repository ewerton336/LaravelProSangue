<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCedenteLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedente_locals', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->bigInteger('telefone');
            $table->string('endereco', 700);
            $table->string('responsavel', 70);
            $table->timestamps();
           // $table->bigInteger('usuario_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cedente_locals');
    }
}
