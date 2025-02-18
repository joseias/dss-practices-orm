<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clean the table
        DB::table('roles')->delete();

        // creating roles

        $roles = [['name' => 'admin', 'description' => 'System administrator.'],
            ['name' => 'user', 'description' => 'User of the system.'],
            ['name' => 'guest', 'description' => 'Guest user.']
        ];

        // insert into data base
        DB::table('roles')->insert($roles);
    }
}
