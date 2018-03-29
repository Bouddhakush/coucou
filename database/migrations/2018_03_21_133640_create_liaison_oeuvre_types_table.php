<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiaisonOeuvreTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liaison_oeuvre_types', function (Blueprint $table) {
            $table->increments('id_liaison');
            $table->integer('id_oeuvre')->unsigned();
            $table->integer('id_son')->unsigned()->nullable();
            $table->integer('id_image')->unsigned()->nullable();
            $table->integer('id_video')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('liaison_oeuvre_types', function($table) {
            $table->foreign('id_oeuvre')->references('id_oeuvre')->on('oeuvres')->onDelete('cascade');
            $table->foreign('id_son')->references('id_son')->on('sons')->onDelete('cascade');
            $table->foreign('id_image')->references('id_image')->on('images')->onDelete('cascade');
            $table->foreign('id_video')->references('id_video')->on('videos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liaison_oeuvre_types');
    }
}
