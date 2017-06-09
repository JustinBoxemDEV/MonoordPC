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
                    ],
                    [
                        'band_name' => 'Minstrel of Doom',
                        'band_credits' => 0,
                    ],
                    
        ]);
    }
}
