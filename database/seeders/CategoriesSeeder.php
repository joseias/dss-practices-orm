<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clean the table
        DB::table('categories')->delete();

        // creating categories
        $date = Carbon::now();
        $categories = [['name' => 'Processors', 'created_at' => $date, 'updated_at' => $date], 
                       ['name' => 'Disks', 'created_at' => $date, 'updated_at' => $date]
        ];

        // insert into data base
        DB::table('categories')->insert($categories);
    }
}
