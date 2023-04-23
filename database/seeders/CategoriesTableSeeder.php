<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['cat_one', 'cat_two', 'cat_three'];

        foreach ($categories as $category) {
            Category::create([
                'ar' => ['name' => $category],
                'en' => ['name' => $category]
            ]);
        }
    }
}
