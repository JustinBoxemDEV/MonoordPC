<?php

use Illuminate\Database\Seeder;

class RoomPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room__prices')->insert(
                [
                    [
                        'per_hour' => 1,
                        'per_two' => 1,
                        'per_three' => 1,
                        'per_two_plus' => 1,
                        'per_three_plus' => 1,
                        'five_ticket' => 1,
                        'ten_ticket' => 1,
                        'daypart' => 1,
                    ],                    
        ]);
    }
}
