<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
            $this->call(UtilisateursTableSeeder::class);
            $this->call(ArtistesTableSeeder::class);
            $this->call(LabelsTableSeeder::class);
            $this->call(GenresTableSeeder::class);
            $this->call(OeuvresTableSeeder::class);
            $this->call(ImagesTableSeeder::class);
            $this->call(SonsTableSeeder::class);
            $this->call(VideosTableSeeder::class);
    }
}
