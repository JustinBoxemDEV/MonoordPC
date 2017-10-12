<?php

use Illuminate\Database\Seeder;

class VatsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('vats')->insert(
                [
                    [
                        'vat_value' => 21,
                        'vat_activation_date' => '2017-06-01 10:35:11',
                    ],
        ]);
    }

}
