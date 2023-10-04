<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::Create([
            'code'=>'12345',
            'name'=>'mie sarimi',
            'price'=>3500
        ]);
        Product::Create([
            'code'=>'abcde',
            'name'=>'ultra milk',
            'price'=>5000
        ]);
        Product::Create([
            'code'=>'klmno',
            'name'=>'sari gandum',
            'price'=>2000
        ]);
        Product::Create([
            'code'=>'asdfg',
            'name'=>'beng beng',
            'price'=>2000
        ]);
        Product::Create([
            'code'=>'asdfg',
            'name'=>'qtela',
            'price'=>7000
        ]);
    }
}
