<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'description' => 'Explore a wide range of electronic products.',
            ],
            [
                'name' => 'Clothing',
                'slug' => 'clothing',
                'description' => 'Shop for fashionable clothing and accessories.',
            ],
            [
                'name' => 'Home & Kitchen',
                'slug' => 'home-kitchen',
                'description' => 'Discover products for your home and kitchen needs.',
            ],
            [
                'name' => 'Books',
                'slug' => 'books',
                'description' => 'Find a collection of books from various genres.',
            ],
            [
                'name' => 'Sports & Fitness',
                'slug' => 'sports-fitness',
                'description' => 'Get fit with sports and fitness equipment.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
