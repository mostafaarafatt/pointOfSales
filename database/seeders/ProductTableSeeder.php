<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = ['pro_one', 'pro_two'];

        foreach ($products as $product) {
            Product::create([
                'category_id' => 1,
                'ar' => ['name' => $product, 'description' => $product . ' desc'],
                'en' => ['name' => $product, 'description' => $product . ' desc'],
                'purchase_price' => 100,
                'sale_price' => 200,
                'stock' => 50

            ]);
        }
    }
}
