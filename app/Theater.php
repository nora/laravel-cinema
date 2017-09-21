<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    //tableInfo
    protected $table = 'THEATER_MST';
    protected $primaryKey = 'THEATER_ID';

    //relations
    public function screens()
    {
        return $this->hasMany('App\Screen');
    }
    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }
}