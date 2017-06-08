<?php

use Illuminate\Database\Seeder;

class TimeblocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timeblocks')->insert(
                [
                    [
                        'timeblock_name' => 'Dagdeel 1 uur',
                        'timeblock_start' => '10:00',
                        'timeblock_end' => '18:00',
                        
                    ],
                    [
                        'timeblock_name' => 'Dagdeel 3 uur',
                        'timeblock_start' => '10:00',
                        'timeblock_end' => '18:00',
                        
                    ],
                    [
                        'timeblock_name' => 'Tijdblok A',
                        'timeblock_start' => '18:00',
                        'timeblock_end' => '21:00',
                        
                    ],
                    [
                        'timeblock_name' => 'Tijdblok B',
                        'timeblock_start' => '19:00',
                        'timeblock_end' => '21:00',
                        
                    ],
                    [
                        'timeblock_name' => 'Tijdblok C',
                        'timeblock_start' => '21:00',
                        'timeblock_end' => '23:00',
                        
                    ],
                    [
                        'timeblock_name' => 'Tijdblok D',
                        'timeblock_start' => '21:00',
                        'timeblock_end' => '00:00',
                    ],
        ]);
    }
}
