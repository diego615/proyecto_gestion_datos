<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviosTable extends Migration
{
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->id('id_envio');
            $table->unsignedBigInteger('id_abastecimiento');
            $table->unsignedBigInteger('id_naviera');
            $table->date('fecha_envio');
            $table->decimal('cantidad_enviada', 10, 2);
            $table->timestamps();

            $table->foreign('id_abastecimiento')->references('id_abastecimiento')->on('abastecimientos');
            $table->foreign('id_naviera')->references('id_naviera')->on('navieras');
        });
    }

    public function down()
    {
        Schema::dropIfExists('envios');
    }
}