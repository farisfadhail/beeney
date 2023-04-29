<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'question_detail',
        'created_date'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function Tag()
    {
        return $this->hasMany(Tag::class);
    }
}
