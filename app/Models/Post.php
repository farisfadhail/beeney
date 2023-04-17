<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'post_detail',
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
}
