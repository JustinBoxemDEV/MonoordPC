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
                    /***
                     * Oefenruimte
                     */
                    [
                        'room_type_name' => 'Oefenruimte 20 m2',
                        'room_type_surface' => 20,                    
                    ],
                    [
                        'room_type_name' => 'Oefenruimte 21 m2',
                        'room_type_surface' => 21,
                    ],
                    [
                        'room_type_name' => 'Oefenruimte 27 m2',
                        'room_type_surface' => 27,
                    ],
                    [
                        'room_type_name' => 'Oefenruimte 30 m2',
                        'room_type_surface' => 30,
                    ],
                    [
                        'room_type_name' => 'Oefenruimte 33 m2',
                        'room_type_surface' => 33,
                    ],
                    /***
                     * Lesruimte
                     */
                    [
                        'room_type_name' => 'Lesruimte 20 m2',
                        'room_type_surface' => 20,
                    ],
                    [
                        'room_type_name' => 'Lesruimte 21 m2',
                        'room_type_surface' => 21,
                    ],
                    [
                        'room_type_name' => 'Lesruimte 27 m2',
                        'room_type_surface' => 27,
                    ],
                    [
                        'room_type_name' => 'Lesruimte 30 m2',
                        'room_type_surface' => 30,
                    ],
                    [
                        'room_type_name' => 'Lesruimte 33 m2',
                        'room_type_surface' => 33,
                    ],
                    /***
                     * Cabine
                     */
                    [
                        'room_type_name' => 'Cabine 6 m2',
                        'room_type_surface' => 6,
                    ],
                    /***
                     * Koorruimte
                     */
                    [
                        'room_type_name' => 'Koorruimte 30 m2',
                        'room_type_surface' => 30,
                    ],
                    /***
                     * Podium
                     */
                    [
                        'room_type_name' => 'Podium 80 m2',
                        'room_type_surface' => 80,
                    ],
        ]);
    }
}
