<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert((array(
            'nom_image' => '000001.jpg'
        )));

        DB::table('images')->insert((array(
            'nom_image' => '000002.jpg'
        )));

        DB::table('images')->insert((array(
            'nom_image' => '000001.png'
        )));

        DB::table('images')->insert((array(
            'nom_image' => '000002.png'
        )));
    }
}
