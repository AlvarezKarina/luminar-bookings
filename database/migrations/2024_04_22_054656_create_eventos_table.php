<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('clasificacion_id');
            $table->decimal('precio', 10, 2);
            $table->integer('asistentes');
            $table->string('direccion');
            $table->string('foto');
            $table->unsignedBigInteger('distrito_id');
            $table->unsignedBigInteger('estado_id');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categoria_eventos')->onDelete('cascade');
            $table->foreign('clasificacion_id')->references('id')->on('clasificacion_eventos')->onDelete('cascade');
            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estado_eventos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
