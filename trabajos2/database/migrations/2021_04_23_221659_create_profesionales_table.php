<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesionals', function (Blueprint $table) {
            $table->increments("id");
            $table->string("usuario", 40);
            $table->string("contraseña_usuario", 20);
            $table->string("nombrec_usuario", 80);
            $table->string("correo_usuario", 80);
            $table->integer("telefono");
            $table->integer("edad");
            $table->integer("id_categoria");
            $table->string("descripcion_profesional", 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesionals');
    }
}
