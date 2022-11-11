<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonal extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name'       ,
        'comment'    ,
        'visibility'
    ];
}
