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
        \App\Label::truncate();

        $faker = \Faker\Factory::create();

        /* \App\Artiste::created([
             'nom_ariste' => 'Jean-Louis',
         ]);*/

        for ($i = 0; $i < 50; $i++) {
            \App\Label::create([
                'nom_label' => $faker->sentence('1')
            ]);
        }
    }
}

