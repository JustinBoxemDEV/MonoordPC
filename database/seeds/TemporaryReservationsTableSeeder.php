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
                        'temp_reservation_time_start' => '2017-07-07 13:00:00',
                        'temp_reservation_time_end' => '2017-07-07 13:30:00',
                        'temp_delayed' => 0,
                        'processed' => 0,
                    ],
                    [
                        'band_id' => 2,
                        'payment_method_id' => 1,
                        'room_id' => 4,
                        'temp_reservation_time_start' => '2017-07-07 11:00:00',
                        'temp_reservation_time_end' => '2017-07-07 11:30:00',
                        'temp_delayed' => 0,
                        'processed' => 1,
                    ],
                    [
                        'band_id' => 3,
                        'payment_method_id' => 2,
                        'room_id' => 6,
                        'temp_reservation_time_start' => '2017-07-07 11:00:00',
                        'temp_reservation_time_end' => '2017-07-07 11:30:00',
                        'temp_delayed' => 0,
                        'processed' => 0,
                    ],
                    [
                        'band_id' => 4,
                        'payment_method_id' => 2,
                        'room_id' => 5,
                        'temp_reservation_time_start' => '2017-07-07 13:00:00',
                        'temp_reservation_time_end' => '2017-07-07 13:30:00',
                        'temp_delayed' => 0,
                        'processed' => 1,
                    ],
                    [
                        'band_id' => 4,
                        'payment_method_id' => 2,
                        'room_id' => 7,
                        'temp_reservation_time_start' => '2017-09-09 14:00:00',
                        'temp_reservation_time_end' => '2017-09-09 14:50:00',
                        'temp_delayed' => 0,
                        'processed' => 1,
                    ],
                                        
        ]);
    }
}
