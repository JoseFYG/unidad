<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHermanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hermanos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('dni')->unique();
            $table->string('telefono');
            $table->string('email');
            $table->string('numero');
            $table->string('fechaNac');
            $table->string('fechaIng');
            $table->string('cortejo');
            $table->string('medalla');
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
        Schema::dropIfExists('hermanos');
    }
}
