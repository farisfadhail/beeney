<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $defaultIdValue = null;


    protected $fillable = [
        'user_id',
        'title',
        'body',
        'created_date',
        'watch'
    ];

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

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
