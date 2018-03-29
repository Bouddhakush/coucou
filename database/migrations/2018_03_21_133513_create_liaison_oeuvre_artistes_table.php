<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiaisonOeuvreArtistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liaison_oeuvre_artistes', function (Blueprint $table) {
            $table->increments('id_liaison');
            $table->integer('id_oeuvre')->unsigned();
            $table->integer('id_artiste')->unsigned();
            $table->timestamps();
        });

        Schema::table('liaison_oeuvre_artistes', function($table) {
            $table->foreign('id_oeuvre')->references('id_oeuvre')->on('oeuvres')->onDelete('cascade');
            $table->foreign('id_artiste')->references('id_artiste')->on('artistes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liaison_oeuvre_artistes');
    }
}
