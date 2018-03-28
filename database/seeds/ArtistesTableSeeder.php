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
        \App\Artiste::truncate();

        $faker = \Faker\Factory::create();

       /* \App\Artiste::created([
            'nom_ariste' => 'Jean-Louis',
        ]);*/

        for ($i = 0; $i < 50; $i++) {
            \App\Artiste::create([
               'nom_artiste' => $faker->sentence('1')
            ]);
        }
    }
}
