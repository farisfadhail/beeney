<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Dislike;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'reply_body',
        'created_date'
    ];

    public function Post()
    {
        return $this->belongsTo(Post::class);
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
