<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'bookid','comment','visitor','date_added'
    ];
    protected $hidden = ['created_at', 'updated_at'];
    protected $table = 'comments';

}
