<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //tableName
    protected $table = 'MOVIE_TBL';
    protected $primaryKey = 'MOV_CODE';
}
