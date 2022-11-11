<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'logo'        ,
        'name'        ,
        'email'       ,
        'phone_number',
        'address'     ,
        'city'        ,
        'country'     ,
        'postal_code' ,
        'facebook'    ,
        'instagram'   ,
        'linkedin'
    ];
}
