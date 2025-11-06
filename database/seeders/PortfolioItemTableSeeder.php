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
        $categories = Category::pluck('id')->toArray();
        foreach ($categories as $category) {
            PortfolioItem::factory()->create([
                'category_id' => $category
            ]);
        }
    }
}
