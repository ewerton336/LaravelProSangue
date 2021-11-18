<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaAdminEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_eventos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_admin')->unsigned();
            $table->bigInteger('id_evento')->unsigned();
        });

        Schema::table('admin_eventos', function (Blueprint $table) {
            $table->foreign('id_admin')->references('id')
            ->on('administradors');
            $table->foreign('id_evento')->references('id')
            ->on('calendario_eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_eventos');
    }
}
