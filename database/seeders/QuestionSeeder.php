<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Date;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'id' => Str::uuid(),
                'user_id' => 1,
                'title' => 'Apakah lebah apis dorsata mengalami kerandoman yang luar biasa?',
                'question_detail' => 'jadi begini aslinya itu saya dua, tapi yang 1 kabur, dan 2 lagi kabur, saya aslinya 4, trus yg 3? kabur',
                'created_date' => Date::now()
            ]
        ];
        foreach($questions as $question)
        {
            Question::create($question);
        }
    }
}
