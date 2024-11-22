<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbastecimientosTable extends Migration
{
    public function up()
    {
        Schema::create('abastecimientos', function (Blueprint $table) {
            $table->id('id_abastecimiento');
            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('id_fabricante');
            $table->unsignedBigInteger('id_combustible');
            $table->decimal('cantidad', 10, 2);
            $table->date('fecha_abastecimiento');
            $table->timestamps();

            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
            $table->foreign('id_fabricante')->references('id_fabricante')->on('fabricantes');
            $table->foreign('id_combustible')->references('id_combustible')->on('combustibles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('abastecimientos');
    }
}