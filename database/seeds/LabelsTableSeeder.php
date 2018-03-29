<?php

use Illuminate\Database\Seeder;

class LabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labels')->insert((array(
            'nom_label' => 'Beats Per Inch'
        )));

        DB::table('labels')->insert((array(
            'nom_label' => 'Issou Lab'
        )));

        DB::table('labels')->insert((array(
            'nom_label' => 'Label O'
        )));
    }
}

