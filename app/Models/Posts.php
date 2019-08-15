<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    public function tags()
    {
        return $this->hasMany(Tags::class, 'post_id', 'id');
    }
}
