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
                'body' => 'jadi begini aslinya itu saya dua, tapi yang 1 kabur, dan 2 lagi kabur, saya aslinya 4, trus yg 3? kabur',
                'created_date' => Date::now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => 2,
                'title' => 'Apakah ratu lebah dapat menjabat 3 periode?',
                'body' => 'saya bertanya anda menjawa, jika anda tidak bisa menjawab maka dia menjawab, jika tidak ada yang bisa menjawab, lantas siapa yang menjawab saya tidak tahu',
                'created_date' => Date::now()
            ]
        ];
        foreach($questions as $question)
        {
            Question::create($question);
        }
    }
}
