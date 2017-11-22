<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //tableInfo
    protected $table = 'SEAT_MST';
    protected $primaryKey = 'SEAT_ID';

    //relations
    public function screen()
    {
        return $this->belongsTo('App\Screen');
    }
}
