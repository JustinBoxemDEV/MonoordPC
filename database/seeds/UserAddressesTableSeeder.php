<?php

use Illuminate\Database\Seeder;

class UserAddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_addresses')->insert(
                [
                    [
                        'user_id' => 1,
                        'city_id' => 3,
                        'zip_code' => '6655AL',
                        'street' => 'Klaverjas',
                        'housenumber' => 7,
                        'housenumber_extension' => null,
                    ],
                    [
                        'user_id' => 2,
                        'city_id' => 1,
                        'zip_code' => '9988PO',
                        'street' => 'Kabelbaan',
                        'housenumber' => 77,
                        'housenumber_extension' => 'b',
                    ],
                    [
                        'user_id' => 3,
                        'city_id' => 3,
                        'zip_code' => '1121AB',
                        'street' => 'Bowlingbaan',
                        'housenumber' => 1,
                        'housenumber_extension' => null,
                    ],
                    [
                        'user_id' => 4,
                        'city_id' => 2,
                        'zip_code' => '5567',
                        'street' => 'Kolendraft',
                        'housenumber' => 91,
                        'housenumber_extension' => 'a',
                    ],
                    [
                        'user_id' => 5,
                        'city_id' => 1,
                        'zip_code' => '3245TR',
                        'street' => 'Pitabroodje',
                        'housenumber' => 69,
                        'housenumber_extension' => null,
                    ],
        ]);
    }

}
