<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //tableInfo
    protected $table = 'MOVIE_TBL';
    protected $primaryKey = 'MOV_ID';

    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'SCHEDULE_ID');
    }
}
