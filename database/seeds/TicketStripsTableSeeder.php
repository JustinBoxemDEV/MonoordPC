<?php

use Illuminate\Database\Seeder;

class TicketStripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket_strips')->insert(
                [
                
                /***
                 * Tickets for the day hours.
                 */
                    /***
                     * 20 M2
                     */
                    [
                        'room_type_id' => 1,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    /***
                     * 21 M2
                     */
                    [
                        'room_type_id' => 2,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 2,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 2,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 2,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],                    
                    /***
                     * 27 M2
                     */
                    [
                        'room_type_id' => 3,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 3,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 3,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 3,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    /***
                     * 30 M2
                     */
                    [
                        'room_type_id' => 4,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 4,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 4,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 4,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    /***
                     * 33 M2
                     */
                    [
                        'room_type_id' => 5,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 5,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 5,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 5,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    /***
                     * 6 M2
                     */
                    [
                        'room_type_id' => 11,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 11,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 11,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 11,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    /***
                     * KR
                     */
                    [
                        'room_type_id' => 12,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 12,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 12,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 12,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    /***
                     * 80 M2
                     */
                    [
                        'room_type_id' => 13,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 13,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 13,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],
                    [
                        'room_type_id' => 13,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 1,
                        
                    ],  
                    
                    
                 /***
                 * Tickets for the evening hours.
                 */
                    
                    /***
                     * 20 M2
                     */
                    [
                        'room_type_id' => 1,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 1,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    /***
                     * 21 M2
                     */
                    [
                        'room_type_id' => 2,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 2,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 2,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 2,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],                    
                    /***
                     * 27 M2
                     */
                    [
                        'room_type_id' => 3,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 3,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 3,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 3,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    /***
                     * 30 M2
                     */
                    [
                        'room_type_id' => 4,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 4,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 4,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 4,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    /***
                     * 33 M2
                     */
                    [
                        'room_type_id' => 5,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 5,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 5,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 5,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    /***
                     * 6 M2
                     */
                    [
                        'room_type_id' => 11,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 11,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 11,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 11,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    /***
                     * KR
                     */
                    [
                        'room_type_id' => 12,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 12,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 12,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 12,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    /***
                     * 80 M2
                     */
                    [
                        'room_type_id' => 13,
                        'three_hour' => 1,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 13,
                        'three_hour' => 0,
                        'filled' => 0,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 13,
                        'three_hour' => 1,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ],
                    [
                        'room_type_id' => 13,
                        'three_hour' => 0,
                        'filled' => 1,
                        'daytime' => 0,
                        
                    ], 
        ]);
    }
}
