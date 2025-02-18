<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clean the table
        DB::table('phones')->delete();

        // get all users
        $users = DB::table('users')->get();

        // creating fake phone for each user
        foreach ($users as $user) {

            $country = fake()->randomNumber(3, false);
            $number = fake()->randomNumber(9, true);

            DB::table('phones')->insert(["country" => $country, "number" => $number, "user_id" => $user->id]);

        }
    }
}
