<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    protected $table = 'page-views';

    public function isAccessible()
    {
        return \Auth::user()->can('browse', Voyager::model('Page'));
    }
}
