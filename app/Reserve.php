<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    //tableName
    protected $table = 'SEAT_RESERVE_TBL';
    protected $primaryKey = 'SEAT_RESERVE_ID';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
