<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->boolean('verified')->default(false);
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('register_ip')->nullable();
            $table->mediumText('avatar')->nullable();
            $table->mediumText('about_me')->nullable();
            $table->mediumText('current_location')->nullable();
            $table->mediumText('interest')->nullable();
            $table->mediumText('occupation')->nullable();
            $table->mediumText('twitter')->nullable();
            $table->mediumText('youtube')->nullable();
            $table->mediumText('twitch')->nullable();
            $table->mediumText('discord')->nullable();
            $table->mediumText('skype')->nullable();
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
        Schema::dropIfExists('users');
    }
}
