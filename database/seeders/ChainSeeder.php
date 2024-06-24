<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Chain;
use App\Models\Publisher;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Mockery\Matcher\Subset;

class ChainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = Subject::all();
        $publishers = Publisher::all();
        for ($i = 1; $i <= 10; $i++) {
            Chain::create([
                'id_subject' => $subjects->random()->id,
                'id_publisher' => $publishers->random()->id
            ]);
        }
    }
}
