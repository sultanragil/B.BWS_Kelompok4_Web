<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'review';
    protected $fillable = [
        'title_id',
        'user_id',
        'content',
        'rate'
    ];

    public function lreview()
    {
        return $this->belongsTo('App\Title');
    }

    public function review()
    {
        return $this->hasOne('App\User');
    }
}
