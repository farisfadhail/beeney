<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Dislike;
use App\Models\Question;
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

    public function Like()
    {
        return $this->hasMany(Like::class);
    }

    public function Dislike()
    {
        return $this->hasMany(Dislike::class);
    }
}
