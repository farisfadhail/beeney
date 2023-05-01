<?php

namespace Database\Seeders;

use App\Models\Reply;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uuid = DB::table('questions')->select('id')->first();

        $replies = [
            [
                'user_id' => 1,
                'question_id' => $uuid->id,
                'reply_body' => 'Berdasarkan kabar burung yang saya dengar, madu tidak bisa bertambah kalau kita makan, karena jika kita memakan madu, madu akan berkurang',
                'created_date' => Date::now()
            ]
        ];
        foreach($replies as $reply)
        {
            Reply::create($reply);
        }
    }
}
