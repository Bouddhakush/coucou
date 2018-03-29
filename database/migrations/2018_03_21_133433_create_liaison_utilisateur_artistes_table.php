<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiaisonUtilisateurArtistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liaison_utilisateur_artistes', function (Blueprint $table) {
            $table->increments('id_liaison');
            $table->integer('id_utilisateur')->unsigned();
            $table->integer('id_artiste')->unsigned();
            $table->timestamps();
        });

        Schema::table('liaison_utilisateur_artistes', function($table) {
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('id_artiste')->references('id_utilisateur')->on('utilisateurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liaison_utilisateur_artistes');
    }
}
