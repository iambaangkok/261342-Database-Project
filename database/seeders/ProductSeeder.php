<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Samsung Galaxy',
                'description' => 'Samsung Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'stock' => 999,
                'price' => 100
            ],
            [
                'name' => 'Apple iPhone 12',
                'description' => 'Apple Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
                'stock' => 999,
                'price' => 500
            ],
            [
                'name' => 'Google Pixel 2 XL',
                'description' => 'Google Pixel Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Google',
                'stock' => 999,
                'price' => 400
            ],
            [
                'name' => 'LG V10 H800',
                'description' => 'LG Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=LG',
                'stock' => 999,
                'price' => 200
            ]
        ];
        foreach ($products as $key => $value) {
            Products::create($value);
        }
    }
}


