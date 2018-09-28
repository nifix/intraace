<?php

use Illuminate\Database\Seeder;

class CustomersEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 8; $i++) {
            DB::table('customers_events')->insert(array(
                'customer_id'         => 1,
                'event_month'         => $i,
                'event_year'          => 2018,
                'event_code'          => 'EVENT_PROGRESS_SAISIE',
            ));
        }
    }
}
