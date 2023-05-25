<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'thumbnail',
        'title',
        'article_body',
        'created_date'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
