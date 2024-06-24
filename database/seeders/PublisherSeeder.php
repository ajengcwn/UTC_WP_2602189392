<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        for ($i = 1; $i <= 3; $i++) {
            Publisher::create([
                'name' => fake()->name(),
                'id_category' => $categories->random()->id
            ]);
        }
    }
}
