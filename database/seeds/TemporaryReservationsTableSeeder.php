<?php

use Illuminate\Database\Seeder;

class TemporaryReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temporary__reservations')->insert(
                [
                    [
                        'band_id' => 1,
                        'payment_method_id' => 3,
                        'room_id' => 1,
                        'temp_reservation_date' => '2017-07-07',
                        'temp_delayed' => 0,
                    ],
                    [
                        'band_id' => 2,
                        'payment_method_id' => 1,
                        'room_id' => 4,
                        'temp_reservation_date' => '2017-07-07',
                        'temp_delayed' => 0,
                    ],
                                        
        ]);
    }
}
