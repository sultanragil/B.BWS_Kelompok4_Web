<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $table = 'genre';
    protected $fillable = [
        'genre_name',
        'genre_desc',
    ];

    public function lgenre()
    {
        return $this->belongsToMany('App\Genre');
    }

}
