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
        // Create 5 main categories
        $mainCategories = Category::factory()->count(5)->create();

        // For each main category, add 1 child category
        foreach ($mainCategories as $category) {
            Category::factory()->create([
                'parent_id' => $category->id,
            ]);
        }
    }
}
