<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasajerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajeros', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula');
            $table->integer('edad');
            //Estudiante o trabajador
            $table->string('ocupacion');
            //Se refiere a su curso o puesto de trabajo
            $table->string('curso');
            $table->string('direccion');
            $table->string('codigo_postal');
            //Turno de trabajo (Manana, tarde , noche)
            $table->string('turno');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('pasajeros');
    }
}
