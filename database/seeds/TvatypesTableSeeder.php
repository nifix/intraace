<?php

use Illuminate\Database\Seeder;

class TvatypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tva_types')->insert(array(
            'tva_id'        => 1,
            'description'   => 'CA3 Mensuelle',
            'deadline'      => '21',
            'recurring'     => true,
            'frequency'     => '1m',
        ));

        DB::table('tva_types')->insert(array(
            'tva_id'        => 2,
            'description'   => 'CA3 Mensuelle',
            'deadline'      => '24',
            'recurring'     => true,
            'frequency'     => '1m'
        ));

        DB::table('tva_types')->insert(array(
            'tva_id'        => 3,
            'description'   => 'CA3 Trimestrielle',
            'deadline'      => '21',
            'recurring'     => true,
            'frequency'     => '3m',
        ));

        DB::table('tva_types')->insert(array(
            'tva_id'        => 4,
            'description'   => 'CA3 Trimestrielle',
            'deadline'      => '24',
            'recurring'     => true,
            'frequency'     => '3m',
        ));

        DB::table('tva_types')->insert(array(
            'tva_id'        => 5,
            'description'   => 'CA12',
            'deadline'      => '0',
            'recurring'     => false,
            'frequency'     => '',
        ));
    }
}
