<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
