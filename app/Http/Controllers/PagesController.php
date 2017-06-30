<?php

namespace App\Http\Controllers;

use App\User;
use App\Band;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller {

    
    //Defining middleware used for page access
    public function __construct() {
        $this->middleware('auth');
    }

    
    //Redirects guests to the login page | If logged in, show dashboard page and give data with it.
    public function index() {
        if (Auth::guest()) {
            return view('login');
        } else {
            $totalBands = Band::count();
            $totalUsers = User::count();
            $currentDay = date("j F Y");
            $totalReservations = Reservation::count();
            if($totalReservations == 0){
                $totalReservations = "Er zijn momenteel geen reserveringen";
            }
            $reservations = Reservation::all();
            return view('dashboard', compact('totalBands', 'totalUsers', 'totalReservations', 'currentDay', 'reservations'));
        }
    }
}
