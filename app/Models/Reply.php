<?php

namespace App\Models;

use App\Models\Question;
use App\Models\LikeDislike;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question_id',
        'reply_body',
        'created_date'
    ];

    public function Question()
    {
        return $this->belongsTo(Question::class);
    }

    public function LikeDislike()
    {
        return $this->hasMany(LikeDislike::class);
    }

}
