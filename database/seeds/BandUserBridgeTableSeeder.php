<?php

use Illuminate\Database\Seeder;

class BandUserBridgeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('band__user__bridges')->insert(
                [
                    [
                        'band_id' => 1,
                        'user_id' => 1,
                        'is_contactperson' => '0',
                    ],
                    [
                        'band_id' => 1,
                        'user_id' => 3,
                        'is_contactperson' => '1',
                    ],
                    [
                        'band_id' => 2,
                        'user_id' => 2,
                        'is_contactperson' => '1',
                    ],
                    [
                        'band_id' => 3,
                        'user_id' => 4,
                        'is_contactperson' => '1',
                    ],
                    [
                        'band_id' => 4,
                        'user_id' => 4,
                        'is_contactperson' => '0',
                    ],
                    [
                        'band_id' => 4,
                        'user_id' => 5,
                        'is_contactperson' => '1',
                    ],
                                        
        ]);
    }
}
