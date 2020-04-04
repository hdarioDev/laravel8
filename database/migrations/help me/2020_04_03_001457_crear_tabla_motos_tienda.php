<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMotosTienda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motos_tienda', function (Blueprint $table) {
            $table->increments('id_motos_tienda');
            $table->unsignedInteger('id_proveedor');
            $table->foreign('id_proveedor','fk_motos_tienda_proveedor')->references('id_proveedor')->on('proveedor')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_sucursal');
            $table->foreign('id_sucursal','fk_motos_tienda_sucursal')->references('id_sucursal')->on('sucursal')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nombre_proveedor',45);
            $table->string('direccion_proveedor',45);
            $table->integer('telefono_proveedor');
            $table->string('email@_proveedor',45);
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
        Schema::dropIfExists('motos_tienda');
    }
}
