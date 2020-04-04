<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question',300);
            $table->unsignedInteger('order');

            
              
            $table->integer('type_questions_id')->unsigned();
            $table->foreign('type_questions_id')->references('id')->on('type_questions');


          //  $table->unsignedInteger('type_questions_id');
           // $table->foreign('type_questions_id', 'fk_questions_type_questions')->references('id')->on('type_questions')->onDelete('restrict')->onUpdate('restrict');
           
            $table->unsignedInteger('tests_id');
            $table->foreign('tests_id','fk_questions_tests')->references('id')->on('tests')->onDelete('restrict')->onUpdate('restrict');
           
           
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
        Schema::dropIfExists('questions');
    }
}
