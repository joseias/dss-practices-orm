<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $total = 10;

        for ($i = 1; $i <= $total; $i++) {
            
            $user = ['name'=> fake()->name(),
                     'email' => fake()->unique()->safeEmail(),
                     'email_verified_at' => now(), 
                     'remember_token' => Str::random(5),
                     'password' => Str::random(10),
                     'phone' => fake()->unique()->e164PhoneNumber()
        ];

        }
    }
}
