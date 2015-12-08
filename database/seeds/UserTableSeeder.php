<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'SeminalJim',
            'email' => 'jimmyhowe@live.co.uk',
            'password' => bcrypt('locksmith1')
        ]);

        factory(User::class, 20)->create();
    }
}
