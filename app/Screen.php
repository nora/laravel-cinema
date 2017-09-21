<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    //tableInfo
    protected $table = 'SCREEN_MST';
    protected $primaryKey = 'SCREEN_ID';

    //relations
    public function theater()
    {
        return $this->belongsTo('App\Theater', 'THEATER_ID');
    }
    public function sheets()
    {
        return $this->hasMany('App\Sheet', 'SHEET_ID');
    }
    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'SCHEDULE_ID');
    }
}