<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $categories = Category::all();

        if ($users->count() === 0) {
            $this->command->warn('No users found. Seeding default user...');
            $users = User::factory()->count(3)->create();
        }

        if ($categories->count() === 0) {
            $this->command->warn('No categories found. Seeding categories...');
            $this->call(CategorySeeder::class);
            $categories = Category::all();
        }

        // Create 50 news items
        for ($i = 1; $i <= 50; $i++) {
            $title = "Sample News Post $i";
            News::create([
                'user_id' => $users->random()->id,
                'title' => $title,
                'slug' => Str::slug($title),
                'excerpt' => fake()->sentence(),
                'body' => fake()->paragraphs(5, true),
                'image' => 'news/'.$i.'.jpg',
                'category_id' => $categories->random()->id,
                'status' => ['draft', 'published'][rand(0, 1)],
                'is_trending' => rand(0, 1),
                'published_at' => now(),
            ]);
        }
    }
}
