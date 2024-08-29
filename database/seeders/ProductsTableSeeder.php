<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'coffee',
            'cost' => 200,
            'price' => 500,
            'qty' => 10,
            'product_type_id' => 2],
            ['name' => 'wine',
            'cost' => 500,
            'price' => 1000,
            'qty' => 5,
            'product_type_id' => 2 
            ]
        ];
        DB::table('products')->insert($data);
    }
}
