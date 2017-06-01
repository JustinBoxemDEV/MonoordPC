<?php

use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert(
                [
                    [
                        'room_type_name' => 'Oefenruimte',
                    ],
                    [
                        'room_type_name' => 'Lesruimte',
                    ],
                    [
                        'room_type_name' => 'Cabine',
                    ],
                    [
                        'room_type_name' => 'Koorruimte',
                    ],
                    [
                        'room_type_name' => 'Podium',
                    ],
        ]);
    }
}
