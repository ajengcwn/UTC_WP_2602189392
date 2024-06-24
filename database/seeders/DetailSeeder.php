<?php

namespace Database\Seeders;

use App\Models\Detail;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = Subject::all();
        foreach ($subjects as $subject) {
            Detail::create([
                'id_subject' => $subject->id,
                'date' => fake()->date,
                'image' => 'image/' . random_int(1, 10) . '.jpeg',
                'article' => fake()->paragraph()
            ]);
        }
    }
}
