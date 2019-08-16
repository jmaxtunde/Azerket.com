<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('Annonces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titreAnnonce');
            $table->longText('description');
            $table->string('prix');
            $table->string('picture');
            $table->string('condition');
            $table->string('booster')->default('Non');
            $table->string('statut')->default('Desactive');;
            $table->string('lieu');
            $table->string('categorie');
            $table->string('souscategorie');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('Annonces');
    }
}
