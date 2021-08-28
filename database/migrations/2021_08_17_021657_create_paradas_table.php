<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paradas', function (Blueprint $table) {
            $table->id();
            $table->string("direccion");
            $table->string("lat");
            $table->string("lng");
            $table->time('recogida');
            $table->integer('posicion');
            $table->foreignId('usuario_id')->constrained('users');
            $table->foreignId('ruta_id')->nullable()->constrained('rutas');
            $table->tinyText("state");
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
        Schema::dropIfExists('paradas');
    }
}
