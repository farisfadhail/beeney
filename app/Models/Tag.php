<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'tag_title'
    ];

    public function Question()
    {
        return $this->belongsTo(Question::class);
    }
}
