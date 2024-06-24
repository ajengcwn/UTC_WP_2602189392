<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Mockery\Matcher\Subset;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'id_category' => '1',
            'subject' => 'Human and Computer Interaction'
        ]);
        Subject::create([
            'id_category' => '1',
            'subject' => 'User Experience'
        ]);
        Subject::create([
            'id_category' => '1',
            'subject' => 'User Experience for Digital Technology'
        ]);

        Subject::create([
            'id_category' => '2',
            'subject' => 'Agile Software Development'
        ]);
        Subject::create([
            'id_category' => '2',
            'subject' => 'Pattern Software Design'
        ]);
        Subject::create([
            'id_category' => '2',
            'subject' => 'Code Reengineering'
        ]);
    }
}
