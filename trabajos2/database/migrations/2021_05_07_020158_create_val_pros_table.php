<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('val_pros', function (Blueprint $table) {
            $table->increments("id_valoracion");
            $table->integer("puntaje");
            $table->string("opinion", 200);
            $table->integer("id_pro");
            $table->integer("id_cont");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('val_pros');
    }
}
