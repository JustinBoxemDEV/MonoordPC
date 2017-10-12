<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('users')->insert(
                [
                    [
                        'email' => 'admin@admin.nl',
                        'password' => '$2y$10$q/fkaKliLmSjW4Gqrh4Hx.pzPZMcztIL.r4yhD.5Lxdm8ca25YmBy',
                        'firstname' => 'Tester',
                        'lastname' => 'Test',
                        'phone_number' => '+316847544',
                        'is_admin' => '1',
                        'is_verified' => '1',
                        'verification_code' => '5isanumber69',
                    ],
                    [
                        'email' => 'admin@lars.nl',
                        'password' => '$2y$10$q/fkaKliLmSjW4Gqrh4Hx.pzPZMcztIL.r4yhD.5Lxdm8ca25YmBy',
                        'firstname' => 'Tester',
                        'lastname' => 'Test',
                        'phone_number' => '+316451343',
                        'is_admin' => '1',
                        'is_verified' => '1',
                        'verification_code' => '5isanumber69',
                    ],
                    [
                        'email' => 'admin@bas.nl',
                        'password' => '$2y$10$q/fkaKliLmSjW4Gqrh4Hx.pzPZMcztIL.r4yhD.5Lxdm8ca25YmBy',
                        'firstname' => 'Tester',
                        'lastname' => 'Test',
                        'phone_number' => '+316667777',
                        'is_admin' => '1',
                        'is_verified' => '1',
                        'verification_code' => '5isanumber69',
                    ],
                    [
                        'email' => 'tester@test.nl',
                        'password' => '$2y$10$q/fkaKliLmSjW4Gqrh4Hx.pzPZMcztIL.r4yhD.5Lxdm8ca25YmBy',
                        'firstname' => 'Gerard',
                        'lastname' => 'Boon',
                        'phone_number' => '+316234567',
                        'is_admin' => '0',
                        'is_verified' => '1',
                        'verification_code' => '5isanumber69',
                    ],
                    [
                        'email' => 'friet@frieda.nl',
                        'password' => '$2y$10$q/fkaKliLmSjW4Gqrh4Hx.pzPZMcztIL.r4yhD.5Lxdm8ca25YmBy',
                        'firstname' => 'Frieda',
                        'lastname' => 'Bobsen',
                        'phone_number' => '+316858561',
                        'is_admin' => '0',
                        'is_verified' => '1',
                        'verification_code' => '5isanumber69',
                    ],
        ]);
    }
}
