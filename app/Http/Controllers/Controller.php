<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //曜日
    public function jpweek($date){
        //日本語の曜日配列
        $weekjp = array(
            '日', //0
            '月', //1
            '火', //2
            '水', //3
            '木', //4
            '金', //5
            '土'  //6
        );

        $weekno = date('w', $date);

        return $weekjp[$weekno];
    }
}
