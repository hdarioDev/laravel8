<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('answer',300);
            $table->unsignedInteger('qualification');
            $table->dateTime('date_answer');

            $table->unsignedInteger('cuestions_id');
           
            $table->unsignedInteger('users_id')->nullable();;
          
            $table->unsignedInteger('students_id');
           
            $table->unsignedInteger('tests_id');
           

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
        Schema::dropIfExists('answers');
    }
}
