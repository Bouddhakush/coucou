<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiaisonUtilisateurLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liaison_utilisateur_labels', function (Blueprint $table) {
            $table->integer('id_utilisateur')->unsigned()->index();
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->integer('id_label')->unsigned()->index();
            $table->foreign('id_label')->references('id_label')->on('labels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liaison_utilisateur_labels');
    }
}
