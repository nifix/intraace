<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(array(
            'name'          => 'Anthony & Cédric',
            'description'   => 'Dossiers d\'Anthony & Cédric',
        ));
        DB::table('teams')->insert(array(
            'name'          => 'Mireille',
            'description'   => 'Dossiers de Mireille',
        ));
        DB::table('teams')->insert(array(
            'name'          => 'Margaux',
            'description'   => 'Dossiers de Margaux',
        ));
        DB::table('teams')->insert(array(
            'name'          => 'Emmanuelle',
            'description'   => 'Dossiers d\'Emmanuelle',
        ));
    }
}
