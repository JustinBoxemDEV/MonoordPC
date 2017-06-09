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
                        'name' => 'Admin',
                        'email' => 'admin@admin.nl',
                        'password' => '$2y$10$q/fkaKliLmSjW4Gqrh4Hx.pzPZMcztIL.r4yhD.5Lxdm8ca25YmBy',
                        'firstname' => 'Tester',
                        'lastname' => 'Test',
                        'is_admin' => '1',
                        'is_verified' => '1',
                        'verification_code' => '5isanumber69',
                    ],
                    [
                        'name' => 'Admin',
                        'email' => 'admin@lars.nl',
                        'password' => '$2y$10$q/fkaKliLmSjW4Gqrh4Hx.pzPZMcztIL.r4yhD.5Lxdm8ca25YmBy',
                        'firstname' => 'Tester',
                        'lastname' => 'Test',
                        'is_admin' => '1',
                        'is_verified' => '1',
                        'verification_code' => '5isanumber69',
                    ],
                    [
                        'name' => 'Admin',
                        'email' => 'admin@bas.nl',
                        'password' => '$2y$10$q/fkaKliLmSjW4Gqrh4Hx.pzPZMcztIL.r4yhD.5Lxdm8ca25YmBy',
                        'firstname' => 'Tester',
                        'lastname' => 'Test',
                        'is_admin' => '1',
                        'is_verified' => '1',
                        'verification_code' => '5isanumber69',
                    ],
                    [
                        'name' => 'Vloeiboi',
                        'email' => 'tester@test.nl',
                        'password' => '$2y$10$q/fkaKliLmSjW4Gqrh4Hx.pzPZMcztIL.r4yhD.5Lxdm8ca25YmBy',
                        'firstname' => 'Gerard',
                        'lastname' => 'Boon',
                        'is_admin' => '0',
                        'is_verified' => '1',
                        'verification_code' => '5isanumber69',
                    ],
                    [
                        'name' => 'Frieda',
                        'email' => 'friet@frieda.nl',
                        'password' => '$2y$10$q/fkaKliLmSjW4Gqrh4Hx.pzPZMcztIL.r4yhD.5Lxdm8ca25YmBy',
                        'firstname' => 'Frieda',
                        'lastname' => 'Bobsen',
                        'is_admin' => '0',
                        'is_verified' => '1',
                        'verification_code' => '5isanumber69',
                    ],
        ]);
    }
}
