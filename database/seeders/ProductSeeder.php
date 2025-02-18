<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clean the table
        DB::table('products')->delete();

        // get disks category
        $category = DB::table('categories')->where('name', 'Disks')->first();

        $date = Carbon::now();
        $products =  [['name' => 'WD Elements', 'price' => 89.99, 'category_id' => $category->id ,'created_at' => $date, 'updated_at' => $date], 
                      ['name' => 'SandDisk Extreme', 'price' => 109.00, 'category_id' => $category->id ,'created_at' => $date, 'updated_at' => $date],
                      ['name' => 'WD Easystore', 'price' => 169.00, 'category_id' => $category->id ,'created_at' => $date, 'updated_at' => $date],
                      ['name' => 'Seagate Expansion', 'price' => 76.99, 'category_id' => $category->id ,'created_at' => $date, 'updated_at' => $date]
        ];
        // insert into data base
        DB::table('products')->insert($products);


        // get processors category
        $category = DB::table('categories')->where('name', 'Processors')->first();

        $date = Carbon::now();
        $products =  [['name' => 'AMD Ryzen 7 5800X', 'price' => 197.99, 'category_id' => $category->id ,'created_at' => $date, 'updated_at' => $date], 
                        ['name' => 'AMD Ryzen 5 5600X', 'price' => 151.19, 'category_id' => $category->id ,'created_at' => $date, 'updated_at' => $date],
                        ['name' => 'Intel Core i9 149000K', 'price' => 687.17, 'category_id' => $category->id ,'created_at' => $date, 'updated_at' => $date],
                        ['name' => 'Intel Core i3 10105', 'price' => 106.26, 'category_id' => $category->id ,'created_at' => $date, 'updated_at' => $date],
                        ['name' => 'Intel Core i5 12600K', 'price' => 198.04, 'category_id' => $category->id ,'created_at' => $date, 'updated_at' => $date]
        ];
        // insert into data base
        DB::table('products')->insert($products);
    }
}
