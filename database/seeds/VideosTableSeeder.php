<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert((array(
            'nom_video' => 'moules.avi'
        )));

        DB::table('videos')->insert((array(
            'nom_video' => 'beatit.avi'
        )));

        DB::table('videos')->insert((array(
            'nom_video' => 'monfilsmabataille.avi'
        )));

        DB::table('videos')->insert((array(
            'nom_video' => 'withoutme.avi'
        )));
    }
}
