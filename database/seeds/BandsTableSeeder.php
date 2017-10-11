<?php

use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert(
                [
                    [
                        'band_name' => 'Json and the Pussycats',
                        'band_credits' => 200,
                        'notes' => 'Dit is om het notitie veld te testen',
                    ],
                    [
                        'band_name' => 'Minstrel of Doom',
                        'band_credits' => 0,
                        'notes' => null,
                    ],
                    [
                        'band_name' => 'Slayer of Cookies',
                        'band_credits' => 0,
                        'notes' => 'Dit is zodat het notitie veld nogmaals getest word. Deze is ook iets langer, zodat dit veld in wat meer detail wordt getest. Ik hoop dat ik geen spel- of grammatica fouten maak.',
                    ],
                    [
                        'band_name' => 'Fiendish Defiance',
                        'band_credits' => 95,
                        'notes' => null,
                    ],
                    
        ]);
    }
}
