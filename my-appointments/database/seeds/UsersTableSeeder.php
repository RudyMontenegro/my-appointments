<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rudy',
            'email' => 'roli@gmail.com',
            'password' => bcrypt('rolidoss8'), // secret
            'dni' => '12714785',
            'address' => '',
            'phone' => '',
            'role'=> 'admin'
        ]);
        factory(User::class, 50)->create();
    }
}
