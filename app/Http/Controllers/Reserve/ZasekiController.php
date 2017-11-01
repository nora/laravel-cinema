<?php

namespace App\Http\Controllers\Reserve;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReserveRequest;
use App\Movie;
use App\Theater;
use App\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ZasekiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $movInfo;
    public function __construct(Request $request){
        $id = $request->id;
        $this->movInfo = Movie::find($id);
    }

    public function schedule($id)
    {
        //$movInfo = $this->movInfo;
        $movInfo = $this->movInfo;
        $theaters = Theater::all();
        $schedules = Schedule::with('screen')->where('MOV_ID', $id)->get();

        $today =  Carbon::today();
        return view('reserve.schedule',
            compact(
                'movInfo',
                'theaters',
                'schedules',
                'showDays',
                'today'
            ));
    }
    public function zaseki($id, ReserveRequest $request)
    {
        $movInfo = $this->movInfo;
        return view('reserve.zaseki',
            compact(
                'movInfo'
            ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
