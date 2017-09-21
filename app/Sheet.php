<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    //tableInfo
    protected $table = 'SHEET_MST';
    protected $primaryKey = 'SHEET_ID';

    //relations
    public function screen()
    {
        return $this->belongsTo('App\Screen');
    }
}
