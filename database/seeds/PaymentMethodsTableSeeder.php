<?php

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment__methods')->insert(
                [
                    [
                        'payment_method_name' => 'contant',
                        'ticketstrip_value' => null,
                    ],
                    [
                        'payment_method_name' => 'credit_card',
                        'ticketstrip_value' => null,
                    ],
                    [
                        'payment_method_name' => 'rittenkaart 2 uur',
                        'ticketstrip_value' => 20,
                    ],
                    [
                        'payment_method_name' => 'rittenkaart 3 uur',
                        'ticketstrip_value' => 30,
                    ],
        ]);
    }
}
