<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    public function service()
    {
        return $this->belongsTo('App\Service');
    }


    protected $fillable = [
        'image',
        'service_id',
    ];

}
