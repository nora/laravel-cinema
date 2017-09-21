<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //tableInfo
    protected $table = 'MOVIE_SCHEDULE_TBL';
    protected $primaryKey = 'SCHEDULE_ID';

    //relations
    public function screen()
    {
        return $this->belongsTo('App\Screen', 'SCREEN_ID');
    }
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
}