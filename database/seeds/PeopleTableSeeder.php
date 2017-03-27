<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert(
        [
        [
        'initials' => 'J',
        'surname' => 'Boxem',
        'password' => 'test',
        'band_id' => '1',
        'is_verified' => 'true'
        ],
        [
        'initials' => 'B',
        'surname' => 'Bierhof',
        'password' => 'test',
        'band_id' => '2',
        'is_verified' => 'false'
        ],
        ]);
    }
}
