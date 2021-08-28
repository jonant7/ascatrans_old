<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsientoPasajerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asiento_pasajeros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asiento_id')->constrained('asientos');
            $table->foreignId('pasajero_id')->constrained('pasajeros');
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
        Schema::dropIfExists('asiento_pasajeros');
    }
}
