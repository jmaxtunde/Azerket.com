<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBesoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('Besoins', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('titre');
            $table->longText('description');
            $table->string('location');
            $table->string('phoneNumber');
            $table->string('statut');
            $table->unsignedInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('Categories')->onDelete('cascade');
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
        Schema::dropIfExists('Besoins');
    }
}
