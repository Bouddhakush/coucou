<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert((array(
            'nom_genre' => 'Minimal'
        )));

        DB::table('genres')->insert((array(
            'nom_genre' => 'Hardtek'
        )));

        DB::table('genres')->insert((array(
            'nom_genre' => 'Psytrance'
        )));

        DB::table('genres')->insert((array(
            'nom_genre' => 'House'
        )));
    }
}
