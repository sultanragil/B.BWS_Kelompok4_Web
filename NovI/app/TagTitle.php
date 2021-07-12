<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagTitle extends Model
{
    //
    protected $table = 'tag_title' ;
    //protected $primaryKey = 'titletag_id';

    protected $fillable = [
        'title_id',
        'tag_id',
    ];
}
