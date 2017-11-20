<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temporary_Reservations;
use App\Reservation;
use App\Room;

class RosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $currentDay = date("j F Y");
        $rooms = Room::pluck("room_name");
        $times = ["0"=>"10:00","1"=>"10:15","2"=>"10:30","3"=>"10:45","4"=>"11:00","5"=>"11:15","6"=>"11:30","7"=>"11:45","8"=>"12:00","9"=>"12:15",
            "10"=>"12:30","11"=>"12:45","12"=>"13:00","13"=>"13:15","14"=>"13:30","15"=>"13:45","16"=>"14:00","17"=>"14:15","18"=>"14:30","19"=>"14:45",
            "20"=>"15:00","21"=>"15:15","22"=>"15:30","23"=>"15:45","24"=>"16:00","25"=>"16:15","26"=>"16:30","27"=>"16:45","28"=>"17:00","29"=>"17:15",
            "30"=>"17:30","31"=>"17:45","32"=>"18:00","33"=>"18:15","34"=>"18:30","35"=>"18:30","36"=>"18:45","37"=>"19:00","38"=>"19:15","39"=>"19:30",
            "40"=>"19:45","41"=>"20:00","42"=>"20:15","43"=>"20:30","44"=>"20:45","45"=>"21:00","46"=>"21:15","47"=>"21:30","48"=>"21:45","49"=>"22:00",
            "50"=>"22:15","51"=>"22:30","52"=>"22:45","53"=>"23:00","54"=>"23:15","55"=>"23:30","56"=>"23:45","57"=>"00:00"];
                
        $reservations = Reservation::with('Temporary_Reservations')
                                       -> where('processed', '!=', 1);
        return view('roster', compact('currentDay', 'reservations', 'rooms', 'times'));
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
    

    
}
