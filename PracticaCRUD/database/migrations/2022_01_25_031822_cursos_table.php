<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('numero');
            $table->date('fecha');
            $table->boolean('multilenguaje')->default('false')->nullable(); //Checkbox
            $table->boolean('pago')->default('false')->nullable(); //Radio button
            $table->text('descripcion')->nullable();
            $table->enum('dificultad', ['facil', 'media', 'dificil']); //Select
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
        Schema::dropIfExists('cursos');
    }
}
