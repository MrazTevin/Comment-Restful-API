<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment','bookid'
    ];

    protected $table = 'comments';
}
