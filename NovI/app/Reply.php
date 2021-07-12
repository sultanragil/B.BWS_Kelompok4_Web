<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';
    protected $fillable = [
        'comment_id',
        'user_id',
        'content'
    ];

    protected function lreply()
    {
        return $this->belongsTo('App\Comment');
    }
}
