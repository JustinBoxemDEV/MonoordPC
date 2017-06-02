<?php

use Illuminate\Database\Seeder;

class QuantityDiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('quantity__discounts')->insert(
                [
                    [
                        'quantity_discount_percentage' => 0,
                    ],
                    [
                        'quantity_discount_percentage' => 1,
                    ],
                    [
                        'quantity_discount_percentage' => 2,
                    ],
                    [
                        'quantity_discount_percentage' => 3,
                    ],
                    [
                        'quantity_discount_percentage' => 4,
                    ],
                    [
                        'quantity_discount_percentage' => 5,
                    ],
                    [
                        'quantity_discount_percentage' => 8,
                    ],
                    [
                        'quantity_discount_percentage' => 10,
                    ],
                    [
                        'quantity_discount_percentage' => 11,
                    ],
                    [
                        'quantity_discount_percentage' => 12,
                    ],
                    [
                        'quantity_discount_percentage' => 13,
                    ],
                    [
                        'quantity_discount_percentage' => 14,
                    ],
                    [
                        'quantity_discount_percentage' => 15,
                    ],
        ]);
    }
}
