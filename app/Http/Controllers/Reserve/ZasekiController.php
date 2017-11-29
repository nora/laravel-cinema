<?php

namespace App\Http\Controllers\Reserve;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReserveRequest;
use App\Http\Requests\TicketRequest;
use App\Movie;
use App\Theater;
use App\Schedule;
use App\Seat;
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
        $mov_id = $request->mov_id;
        $this->movInfo = Movie::find($mov_id);
    }

    public function schedule($mov_id)
    {
        $movInfo = $this->movInfo;
        $theaters = Theater::all();
        $schedules = Schedule::where('MOV_ID', $mov_id)->get();
        foreach ($schedules as $key => &$schedule) {
            $schedule->MOV_START_TIME = $this->dateFormatFromSql('H:i', $schedule->MOV_START_TIME);
            $schedule->MOV_END_TIME = $this->dateFormatFromSql('H:i', $schedule->MOV_END_TIME);
        }
        $today =  Carbon::today();

        return view('reserve.schedule',
            compact(
                'mov_id',
                'movInfo',
                'theaters',
                'schedules',
                'showDays',
                'today'
            ));
    }
    public function zaseki($mov_id, $schedule_id)
    {
        //映画情報
        $movInfo = $this->movInfo;
        //スケジュールIDからスケジュール情報
        $schedule = Schedule::find($schedule_id);
        $schedule->date = $this->dateFormatFromSql('m月d日', $schedule->MOV_START_TIME);
        $schedule->start = $this->dateFormatFromSql('H:i', $schedule->MOV_START_TIME);
        $schedule->end = $this->dateFormatFromSql('H:i', $schedule->MOV_END_TIME);
        //席情報
        $seats = Seat::where('SCREEN_ID', $schedule_id)
            ->orderBy('ROW', 'ASC')
            ->orderBy('COLUMN', 'ASC')
            ->get();
        //m_id: MOVIE_ID
        //s_id: SCHEDULE_ID

        //export textの生成
        $schedule->EX_TEXT = sprintf(
            '%s (%s) %s〜%s スクリーン%s',
            $this->dateFormatFromSql('m月d日', $schedule->MOV_START_TIME),
            $this->jpweek(strtotime($schedule->MOV_START_TIME)),
            $this->dateFormatFromSql('H:i', $schedule->MOV_START_TIME),
            $this->dateFormatFromSql('H:i', $schedule->MOV_END_TIME),
            $schedule->screen->SCREEN_NO
        );

        return view('reserve.zaseki',
            compact(
                'movInfo',
                'schedule',
                'seats'
            ));
    }
    public function ticket(Request $request, $mov_id, $schedule_id){
        $seatList = $request->all();
        $request->session()->put('seats', $seatList);
        $seats = Seat::whereIn('SEAT_ID', $request->all());

        $movInfo = $this->movInfo;
        $schedule = Schedule::find($schedule_id);
        $schedule->date = $this->dateFormatFromSql('m月d日', $schedule->MOV_START_TIME);
        $schedule->start = $this->dateFormatFromSql('H:i', $schedule->MOV_START_TIME);
        $schedule->end = $this->dateFormatFromSql('H:i', $schedule->MOV_END_TIME);


        return view('reserve.ticket',
            compact(
                'movInfo',
                'schedule',
                'seats',
                'show_date'
            )
        );
    }
    public function user(Request $request, $mov_id, $schedule_id){
        $seatList = $request->session()->get('seats');

        $movInfo = $this->movInfo;
        $schedule = Schedule::find($schedule_id);
        $schedule->date = $this->dateFormatFromSql('m月d日', $schedule->MOV_START_TIME);
        $schedule->start = $this->dateFormatFromSql('H:i', $schedule->MOV_START_TIME);
        $schedule->end = $this->dateFormatFromSql('H:i', $schedule->MOV_END_TIME);
        $seats = Seat::whereIn('SEAT_ID', $seatList);

        return view('reserve.user',
            compact(
                'movInfo',
                'schedule',
                'seats',
                'show_date'
            )
        );
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
    //mysqlのdatetimeからhh:mmの形式に変換
    public function dateFormatFromSql($format, $date)
    {
        return date($format, strtotime($date));
    }
}
