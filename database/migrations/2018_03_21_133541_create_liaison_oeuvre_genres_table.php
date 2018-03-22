<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiaisonOeuvreGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liaison_oeuvre_genres', function (Blueprint $table) {
            $table->integer('id_oeuvre')->unsigned()->index();
            $table->foreign('id_oeuvre')->references('id_oeuvre')->on('oeuvres')->onDelete('cascade');
            $table->integer('id_genre')->unsigned()->index();
            $table->foreign('id_genre')->references('id_genre')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liaison_oeuvre_genres');
    }
}
