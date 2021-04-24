<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratadors', function (Blueprint $table) {
            $table->increments("id");
            $table->string("usuario", 40);
            $table->string("contraseña_usuario", 20);
            $table->string("nombrec_usuario", 80);
            $table->string("correo_usuario", 80);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratadores');
    }
}
