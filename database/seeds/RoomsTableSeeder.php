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
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR2',
                        
                    ],
                    [
                        'room_type_id' => 3,
                        'room_name' => 'OR3',
                        
                    ],
                    [
                        'room_type_id' => 3,
                        'room_name' => 'OR4',
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR5',
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR6',
                        
                    ],
                    [
                        'room_type_id' => 5,
                        'room_name' => 'OR7',
                        
                    ],
                    [
                        'room_type_id' => 2,
                        'room_name' => 'OR8',
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR9',
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR10',
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR11',
                        
                    ],
                    [
                        'room_type_id' => 4,
                        'room_name' => 'OR12',
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR13',
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR14',
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR15',
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'room_name' => 'OR16',
                        
                    ],
                    [
                        'room_type_id' => 11,
                        'room_name' => 'OR18',
                        
                    ],
                    [
                        'room_type_id' => 11,
                        'room_name' => 'OR19',
                        
                    ],
                    [
                        'room_type_id' => 12,
                        'room_name' => 'KR',
                        
                    ],
                    [
                        'room_type_id' => 13,
                        'room_name' => 'PD',
                        
                    ],
        ]);
    }
}
