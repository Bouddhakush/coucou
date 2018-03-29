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
            $table->increments('id_liaison');
            $table->integer('id_oeuvre')->unsigned();
            $table->integer('id_genre')->unsigned();
            $table->timestamps();
        });

        Schema::table('liaison_oeuvre_genres', function($table) {
            $table->foreign('id_oeuvre')->references('id_oeuvre')->on('oeuvres')->onDelete('cascade');
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
