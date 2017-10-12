<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temporary_Reservations;
use App\Reservation;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $reservations = Reservation::all();
            $tempReservations = Temporary_Reservations::all();
            return view('archive', compact('tempReservations', 'reservations'));
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
        $startTime = $request['dateInputArchive1'];
        $endTime = $request['dateInputArchive2'];
        $reservations = Reservation::whereBetween('reservation_time_start', [$startTime, $endTime])->get();
        $tempReservations = Temporary_Reservations::whereBetween('temp_reservation_time_start', [$startTime, $endTime])->get();
        return view('archive', compact('tempReservations', 'reservations'));
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
