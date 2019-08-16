<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('callPhoneNumber')->unique();
            $table->string('whatsAppNumber')->default('Non précisé');
            $table->string('messengerLink')->default('Non précisé');
            $table->string('country')->default('Non précisé');
            $table->string('location')->default('Non précisé');
            $table->string('recommended')->default('No');
            $table->string('adresse')->default('Non précisé');
            $table->string('profilePicture')->default('default.png');
            $table->string('typeAcount')->default('Personnel');
            $table->string('password');
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
