<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reply;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reply_id'
    ];

    public function Reply()
    {
        return $this->belongsTo(Reply::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
