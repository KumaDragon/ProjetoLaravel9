<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeders extends Seeder
{
    public function run()
    {
        User::create([
            'name' =>'Thales',
            'email' =>'thales.b.sousa@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
