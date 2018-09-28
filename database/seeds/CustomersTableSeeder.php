<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 15; $i++) {
            DB::table('customers')->insert(array(
                'customer_name'         => 'Johnny',
                'customer_lastname'     => 'Lafrite',
                'customer_company_name' => 'Ze Kitchen'.str_random(5),
                'company_address'       => '14 avenue de l\'avenue',
                'company_type'          => 'SA',
                'company_tva_id'        => rand(1,5),
                'team_id'               => rand(1,4),
                'company_phone'         => rand(1000000000,1100000000),
            ));
        }
    }
}
