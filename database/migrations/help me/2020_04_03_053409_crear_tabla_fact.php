<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaFact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact', function (Blueprint $table) {
            $table->increments('id_fact');
            $table->unsignedInteger('id_cliente');
            $table->foreign('id_cliente','fk_fact_cliente')->references('id_cliente')->on('cliente')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_motos_tienda');
            $table->foreign('id_motos_tienda','fk_fact_motos_tienda')->references('id_motos_tienda')->on('motos_tienda')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_vendedor');
            $table->foreign('id_vendedor','fk_fact_vendedor')->references('id_vendedor')->on('vendedor')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_modo_pago');
            $table->foreign('id_modo_pago','fk_fact_modo_pago')->references('id_modo_pago')->on('modo_pago')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_fact');
            $table->integer('cantidad_fact');
            $table->integer('precio_total_fact');
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
        Schema::dropIfExists('fact');
    }
}
