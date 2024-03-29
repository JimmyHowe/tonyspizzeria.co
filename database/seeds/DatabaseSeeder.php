<?php

use App\PhoneNumber;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(PhoneNumberTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(ProductTableSeeder::class);

        Model::reguard();
    }
}
