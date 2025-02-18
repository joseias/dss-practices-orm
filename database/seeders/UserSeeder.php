<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clean the table
        DB::table('users')->delete();

        // creating fake users
        $users = array();
        $total = 15;

        for ($i = 1; $i <= $total; $i++) {

            $user = [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => Str::random(10),
            ];

            $users[] = $user;
        }

        // insert into data base
        DB::table('users')->insert($users);

    }
}
