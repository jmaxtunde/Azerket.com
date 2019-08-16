<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoosterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Boosters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('annonce_id');
            $table->unsignedInteger('user_id');
            $table->string('statut');
            $table->string('dateDebut');
            $table->string('dateFin');
            $table->string('budget');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade');
            
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
        Schema::dropIfExists('Booster');
    }
}
