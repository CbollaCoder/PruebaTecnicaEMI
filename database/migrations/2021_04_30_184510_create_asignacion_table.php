<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion', function (Blueprint $table) {

            $table->Increments('id');

            $table->unsignedInteger('id_estudiante');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes'); 

            $table->unsignedInteger('id_materia');
            $table->foreign('id_materia')->references('id')->on('materias'); 

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
        Schema::dropIfExists('asignacion');
    }
}
