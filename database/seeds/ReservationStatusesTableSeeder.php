<?php

use Illuminate\Database\Seeder;

class ReservationStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservation_statuses')->insert(
                [
                    [
                        'reservation_status_name' => 'Normaal',
                        'reservation_status_credit_cost' => 10,
                    ],
                    [
                        'reservation_status_name' => 'Niet Gekomen',
                        'reservation_status_credit_cost' => 10,
                    ],
                    [
                        'reservation_status_name' => 'Afgezegd',
                        'reservation_status_credit_cost' => 0,
                    ],
                    [
                        'reservation_status_name' => 'Ziekte',
                        'reservation_status_credit_cost' => 5,
                    ],
                    [
                        'reservation_status_name' => 'Te laat',
                        'reservation_status_credit_cost' => 10,
                    ],
                    [
                        'reservation_status_name' => 'Gratis',
                        'reservation_status_credit_cost' => 0,
                    ],
                    [
                        'reservation_status_name' => 'Factuur',
                        'reservation_status_credit_cost' => 10,
                    ],
        ]);
    }
}
