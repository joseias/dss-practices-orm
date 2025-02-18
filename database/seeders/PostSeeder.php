<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clean the table
        DB::table('posts')->delete();

        // get all users
        $users = DB::table('users')->get();

        // creating fake posts for each user
        foreach ($users as $user) {

            $posts = array();

            $total = random_int(1, 3);

            for ($i = 0; $i < $total; $i++) {
                $post = [
                    'user_id' => $user->id,
                    'date' => fake()->date(),
                    'title' => fake()->realTextBetween(5, 10),
                    'content' => fake()->realTextBetween(10, 40)
                ];

                $posts[] = $post;

            }

            DB::table('posts')->insert($posts);
        }
    }
}
