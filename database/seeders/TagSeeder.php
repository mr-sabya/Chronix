<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = ['Politics', 'Tech', 'Sports', 'Entertainment', 'Health', 'Education'];

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }
    }
}
