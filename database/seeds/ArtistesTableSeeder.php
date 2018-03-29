<?php

use Illuminate\Database\Seeder;

class ArtistesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artistes')->insert((array(
            'nom_artiste' => 'Guytoon Massive Serotonia'
        )));

        DB::table('artistes')->insert((array(
            'nom_artiste' => 'Bouddhakush'
        )));

        DB::table('artistes')->insert((array(
            'nom_artiste' => 'AlissK'
        )));

        DB::table('artistes')->insert((array(
            'nom_artiste' => 'Ora Bora'
        )));
    }
}
