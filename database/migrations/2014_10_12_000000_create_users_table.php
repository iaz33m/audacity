<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('username');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('number');
            $table->float('earning')->default(0.0);
            $table->string('pic');
            $table->bigInteger('views');
            $table->string('password');
            $table->string('designation');
            $table->string('heading');
            $table->mediumText('bio');
            $table->string('website')->nullable();
            $table->string('google')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->boolean('saveCreditCards')->default(1);
            $table->boolean('emailVerified')->default(0);
            $table->boolean('numberVerified')->default(1);
            $table->boolean('SEVisibility')->default(1);
            $table->boolean('showCourses')->default(1);
            $table->boolean('sendEmails')->default(1);
            $table->tinyInteger('role');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
