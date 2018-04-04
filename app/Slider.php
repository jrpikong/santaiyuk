<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //

    public function scopeStatus($query)
    {
        return $query->where('status',1);
    }


}
