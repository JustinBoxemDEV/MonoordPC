<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert(
                [
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR1',
                    ],
        ]);
    }
}
