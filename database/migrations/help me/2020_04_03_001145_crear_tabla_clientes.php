<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_clientes');
            $table->unsignedInteger('id_genero');
            $table->foreign('id_genero','fk_clientes_genero')->references('id_genero')->on('genero')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nombre_cliente',45);
            $table->string('direccion_cliente',45);
            $table->integer('telefono_cliente');
            $table->integer('edad_cliente');
            $table->string('correo_cliente',45)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
