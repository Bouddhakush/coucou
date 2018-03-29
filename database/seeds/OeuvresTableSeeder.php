<?php

use Illuminate\Database\Seeder;

class OeuvresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oeuvres')->insert((array(
            'nom_oeuvre' => 'A la pêche aux moules'
        )));

        DB::table('oeuvres')->insert((array(
            'nom_oeuvre' => 'Beat It'
        )));

        DB::table('oeuvres')->insert((array(
            'nom_oeuvre' => 'Mon fils ma bataille'
        )));

        DB::table('oeuvres')->insert((array(
            'nom_oeuvre' => 'Without Me'
        )));
    }
}
