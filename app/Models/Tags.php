<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public $timestamps=false;
    protected $fillable = [
        'name',
        'post_id',
    ];
}
