<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //topPage
    public function top(){
        $mov_list = Movie::query()
            ->orderBy('MOV_ID', 'ASC')
            ->take(16)
            ->get();

        return view('index',compact(
            'mov_list'
        ));
    }
}
