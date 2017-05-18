<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{ 
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if(Auth::guest()){
          return view('login'); 
        }
        else{
          return view('dashboard');  
        }
    }
}