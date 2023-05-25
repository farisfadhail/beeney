<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reply;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LikeDislike extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reply_id',
        'type'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Reply()
    {
        return $this->belongsTo(Reply::class);
    }
}
