<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\PortfolioItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfolioItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            'frontend/assets/images/portfolio-1.jpg',
            'frontend/assets/images/portfolio-2.jpg',
            'frontend/assets/images/portfolio-3.jpg',
        ];

        $categories = Category::inRandomOrder()->limit(3)->pluck('id')->toArray();

        foreach ($categories as $index => $categoryId) {

            PortfolioItem::create([
                'category_id' => $categoryId,
                'title'       => fake()->sentence(),
                'description' => fake()->paragraph(),
                'client'      => fake()->name(),
                'website'     => fake()->url(),
                'image'       => $images[$index],
            ]);
        }
    }
}
