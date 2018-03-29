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
        Schema::create('liaison_labels_artistes', function (Blueprint $table) {
            $table->increments('id_liaison');
            $table->integer('id_label')->unsigned();
            $table->integer('id_artiste')->unsigned();
            $table->timestamps();
        });

        Schema::table('liaison_labels_artistes', function($table) {
            $table->foreign('id_label')->references('id_label')->on('labels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_artiste')->references('id_artiste')->on('artistes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

/**
* Reverse the migrations.
*
* @return void
*/
    public function down()
    {
        Schema::dropIfExists('liaison_labels_artistes');
    }
}
