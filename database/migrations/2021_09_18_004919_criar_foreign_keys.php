<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*
        Schema::table('doadores', function (Blueprint $table) {
            $table->foreign('usuario_id')->references('id')
                ->on('usuarios');
        });


        Schema::table('entidades_coletoras', function (Blueprint $table) {
            $table->foreign('usuario_id')->references('id')
                ->on('usuarios');
        });

        Schema::table('cedente_locais', function (Blueprint $table) {
            $table->foreign('usuario_id')->references('id')
                ->on('usuarios');
        });

        Schema::table('administradores', function (Blueprint $table) {
            $table->foreign('usuario_id')->references('id')
                ->on('usuarios');
        });

      */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreignKeys');
    }
}
