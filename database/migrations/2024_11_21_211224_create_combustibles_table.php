<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombustiblesTable extends Migration
{
    public function up()
    {
        Schema::create('combustibles', function (Blueprint $table) {
            $table->id('id_combustible');
            $table->string('tipo_combustible', 50);
            $table->text('descripcion')->nullable();
            $table->boolean('ecologico');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('combustibles');
    }
}