<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricantesTable extends Migration
{
    public function up()
    {
        Schema::create('fabricantes', function (Blueprint $table) {
            $table->id('id_fabricante');
            $table->string('nombre', 100);
            $table->string('contacto', 100)->nullable();
            $table->string('ubicacion', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fabricantes');
    }
}