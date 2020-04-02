<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_name_m',30)->nullable();
            $table->string('title',100);
            $table->string('description',300);
       
            $table->dateTime('date_start');
            $table->dateTime('date_end')->nullable();;

            $table->unsignedInteger('users_id');
            $table->foreign('users_id', 'fk_susers_tests')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
           
           
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
        Schema::dropIfExists('tests');
    }
}
