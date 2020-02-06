<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class names extends Model
{
    protected $fillable = [
        'firstname','middlename','lastname'
    ];

    function employee(){
        return $this->hasOne('App\time','id','timeId');
    }
}
