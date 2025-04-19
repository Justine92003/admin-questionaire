<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            ['question' => 'Do you enjoy working with your hands?', 'category' => 'R'],
            ['question' => 'Are you interested in solving complex problems?', 'category' => 'I'],
            ['question' => 'Do you like expressing yourself creatively?', 'category' => 'A'],
            ['question' => 'Do you enjoy helping others?', 'category' => 'S'],
            ['question' => 'Are you interested in leading projects?', 'category' => 'E'],
            ['question' => 'Do you prefer structured tasks?', 'category' => 'C'],
        ];

        DB::table('questions')->insert($questions);
        $this->call(QuestionsTableSeeder::class);
    }
}