<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $user = [
        [
           'name'=>'Admin',
           'email'=>'nma@gmail.com',
           'password'=> bcrypt('nma1523'),
        ],
        [
           'name'=>'User',
           'email'=>'user@gmail.com',
           'password'=> bcrypt('123456'),
        ],
    ];

    foreach ($user as $key => $value) {
        User::create($value);
    } //
    }
}
