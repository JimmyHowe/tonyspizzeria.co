<?php

use App\PhoneNumber;
use Illuminate\Database\Seeder;

class PhoneNumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PhoneNumber::class, 20)->create();
    }
}
