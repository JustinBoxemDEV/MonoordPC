<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert(
                [
                    [
                        'temporary_reservations_id' => 2,
                        'payment_method_id' => 1,
                        'room_id' => 4,
                        'reservation_status_id' => 1,
                        'reservation_time_start' => '2017-07-07 13:00:00',
                        'reservation_time_end' => '2017-07-07 13:30:00',
                        'delayed' => 0,
                    ],
                    [
                        'temporary_reservations_id' => 4,
                        'payment_method_id' => 2,
                        'room_id' => 5,
                        'reservation_status_id' => 1,
                        'reservation_time_start' => '2017-07-07 13:00:00',
                        'reservation_time_end' => '2017-07-07 13:30:00',
                        'delayed' => 0,
                    ],
                    [
                        'temporary_reservations_id' => 5,
                        'payment_method_id' => 2,
                        'room_id' => 7,
                        'reservation_status_id' => 1,
                        'reservation_time_start' => '2017-09-09 14:00:00',
                        'reservation_time_end' => '2017-09-09 14:50:00',
                        'delayed' => 0,
                    ],
                    
                                        
        ]);
    }
}
