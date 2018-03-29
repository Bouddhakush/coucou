<?php

use Illuminate\Database\Seeder;

class SonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sons')->insert((array(
            'nom_son' => 'moules.wav'
        )));

        DB::table('sons')->insert((array(
            'nom_son' => 'beatit.wav'
        )));

        DB::table('sons')->insert((array(
            'nom_son' => 'monfilsmabataille.wav'
        )));

        DB::table('sons')->insert((array(
            'nom_son' => 'withoutme.wav'
        )));
    }
}
