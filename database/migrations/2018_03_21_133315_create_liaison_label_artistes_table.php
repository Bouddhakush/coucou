<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiaisonLabelArtistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liaison__label_artistes', function (Blueprint $table) {
            $table->integer('id_label')->unsigned()->index();
            $table->foreign('id_label')->references('id_label')->on('labels')->onDelete('cascade');
            $table->integer('id_artiste')->unsigned()->index();
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
        Schema::dropIfExists('liaison__label_artistes');
    }
}
