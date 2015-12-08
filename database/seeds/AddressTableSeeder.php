<?php

use App\Address;
use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Address::class, 2)->create([
            'user_id' => 1
        ]);

        factory(Address::class, 20)->create();
    }
}
