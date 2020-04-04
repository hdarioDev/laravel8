<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaVendedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedor', function (Blueprint $table) {
            
            $table->increments('id_vendedor');
            $table->unsignedInteger('id_motos_tienda');
            $table->foreign('id_motos_tienda','fk_vendedor_motos_tienda5')->references('id_motos_tienda')->on('motos_tienda')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_genero');
            $table->foreign('id_genero','fk_vendedor_genero5')->references('id_genero')->on('genero')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('ci_vendedor');
            $table->string('nombre_vendedor',45);
            $table->string('cargo_vendedor',45);
            $table->string('direccion_vendedor',45);
            $table->integer('telefono_vendedor');
            $table->string('email@_vendedor',45)->nullable();
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
        Schema::dropIfExists('vendedor');
    }
}
