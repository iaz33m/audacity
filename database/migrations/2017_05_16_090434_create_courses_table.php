<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->integer('price');
            $table->string('subTitle');
            $table->text('description');
            $table->bigInteger('views');
            $table->string('testVideo');
            $table->tinyInteger('level');
            $table->float('rating');
            $table->string('image');
            $table->string('introVideo');
            $table->string('welcomeMsg')->nullable();
            $table->string('congMsg')->nullable();
            $table->boolean('bestSelling')->default(0);

            $table->integer('instructor_id');
            $table->integer('category_id');

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
        Schema::drop('courses');
    }
}
