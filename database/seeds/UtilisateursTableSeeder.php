<?php

use Illuminate\Database\Seeder;

class UtilisateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateurs')->insert((array(
            'nom_utilisateur' => 'Guillaume Catel',
            'password_utilisateur' => 'qf41s9dsdf',
            'is_admin' => '1',
            'is_manager' => '1'
        )));

        DB::table('utilisateurs')->insert((array(
            'nom_utilisateur' => 'Alice Kriezic',
            'password_utilisateur' => '4qsdf1sd8',
            'is_admin' => '0',
            'is_manager' => '0'
        )));

        DB::table('utilisateurs')->insert((array(
            'nom_utilisateur' => 'Luc Aires',
            'password_utilisateur' => 'g8719dg7',
            'is_admin' => '0',
            'is_manager' => '1'
        )));

        DB::table('utilisateurs')->insert((array(
            'nom_utilisateur' => 'Axl Wielhorski',
            'password_utilisateur' => 'sd4d1s481s',
            'is_admin' => '1',
            'is_manager' => '0'
        )));
    }
}