<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->string('last_name_p',30);
            $table->string('last_name_m',30)->nullable();
            $table->string('ci',20);
            $table->dateTime('date_birth');
            $table->string('user',30);
            $table->string('password',300);
           
            $table->unsignedInteger('levels_id');
            $table->foreign('levels_id', 'fk_students_levels')->references('id')->on('levels')->onDelete('restrict')->onUpdate('restrict');
           
            $table->unsignedInteger('genders_id');
            $table->foreign('genders_id', 'fk_students_genders')->references('id')->on('genders')->onDelete('restrict')->onUpdate('restrict');
           

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
        Schema::dropIfExists('students');
    }
}
