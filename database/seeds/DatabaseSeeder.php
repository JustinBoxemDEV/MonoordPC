<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        // $this->call(UsersTableSeeder::class);
        $this->call(VatsTableSeeder::class);
        $this->call(RoomTypesTableSeeder::class);
        $this->call(RoomPricesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(UsersTableSeeder::class); 
        $this->call(QuantityDiscountsTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class); 
        $this->call(ReservationStatusesTableSeeder::class);
        $this->call(TimeblocksTableSeeder::class);
        $this->call(UserAddressesTableSeeder::class);
        $this->call(BandsTableSeeder::class);
        $this->call(TemporaryReservationsTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(BandUserBridgeTableSeeder::class);
        $this->call(PricesTableSeeder::class);
        
    }
}
