<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('documento', 50)->index()->unique();
            $table->string('telefono');
            $table->string('direccion')->nullable();
            $table->string('email', 50)->nullable();
            $table->unsignedBigInteger('localidad_id');
            $table->enum('sexo', ['Masculino', 'Femenino', 'No responde'])->default('No responde');
            $table->date('fecNacimiento')->nullable();
            $table->string('profesion', 50)->nullable();
            $table->unsignedBigInteger('equipo_id');
            $table->unsignedBigInteger('evento_id');

            $table->foreign('localidad_id')->references('id')->on('localidades')->onDelete('cascade');
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');

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
        Schema::dropIfExists('participantes');
    }
}
