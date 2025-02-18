<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\CategoriesSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PhoneSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\RoleUserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategoriesSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PhoneSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
    }
}
