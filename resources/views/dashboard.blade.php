@extends('layouts.roster_table')

@section('content')
<div class="container">
    
    <div class="page-header">
        <div class="row">
            <div class="col-lg-4"><h3>Aantal bands: {{ $totalBands }}</h3></div>
            <div class="col-lg-4"><h1>Dashboard</h1></div>
            <div class="col-lg-4"><h3>Aantal users: {{ $totalUsers }}</h3></div>
        </div>
    </div>
    
    <div class="dashboard-links">
        <a href="/roster">Rooster</a>
        <a href="/invoice">Facturen</a>
        <a href="/archive">Archief</a>
        <a href="/adminpanel">Admin Panel</a>
        <hr>
    </div>
    
    <h2>{{ $currentDay }}</h2>
    <br>
    <br> 
    
        <div class="dashboard-overview">
        
            <div class="roster_table">
                
                <table style="width:100%;">
                    <tr>
                        <th>reservationTime</th>
                        <th>reservationID</th>
                        <th>reservationName</th>
                    </tr>
                    <tr>
                        <td align="left">08:00</td>
                        <td align="left">1</td>
                        <td align="left">foobar</td>
                    </tr>
                </table>
            
            </div>
     
        </div>



@endsection