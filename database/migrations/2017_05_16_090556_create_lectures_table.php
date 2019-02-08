<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('lectures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->text('resources');
            $table->string('caption');
            $table->string('content');
            $table->boolean('isDown')->default(0);
            $table->boolean('isPublic');
            $table->integer('duration');
            $table->string('type');
            $table->tinyInteger('order');

            // relationship

            $table->integer('section_id');


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
        Schema::drop('lectures');
    }
}
