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
        Category::create([
            'name' => 'Technology & Innovation',
            'slug' => 'technology-innovation',
            'color' => 'bg-emerald-100'
        ]);

        Category::create([
            'name' => 'Economics & Finance',
            'slug' => 'economics-finance',
            'color' => 'bg-blue-100'
        ]);

        Category::create([
            'name' => 'Pop Culture Analysis',
            'slug' => 'pop-culture-analysis',
            'color' => 'bg-purple-100'
        ]);
    }
}
