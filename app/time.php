<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    protected $fillable = [
        'name_id','clock_in','start_break','end_break','clock_out'
    ];

    // function employee(){
    //     return $this->hasOne('App\time','id','timeId');
    // }
}
