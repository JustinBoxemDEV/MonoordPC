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
                
<!--                <table class="display table table-bordered table-condensed table-responsive dynamic-table">
                    
                    <thead>
                        <tr>
                            <th>Tijd</th>
                            <th>Reservering data</th>
                            <th>Betaalmethode</th>
                            <th>Bevestig</th>
                            <th>Annuleer</th>
                        </tr>
                    </thead>

                    <tbody>
                    <br>
                    @foreach($reservations as $reservation)
                    <tr class="clickable-row" data-url="/roster/{{ $reservation->id }}">
                        <td>
                            <h1>XX:XX</h1>
                        </td>
                        <td>
                            <b>Band: </b>{{ $reservation->Band->band_name}} <br>
                            <b>Datum: </b> {{ $temporary_reservation->temp_reservation_date }} <br>
                            <b>Zaal: </b> {{ $temporary_reservation->Room->room_name }}</td>
                        <td>{{ $temporary_reservation->Payment_Method->payment_method_name }}</td>
                        <td><a href="{{ url('/roster/' . $temporary_reservation->id . '/edit') }}"><button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button></a></td>
                        <td><a href="{{ url('/roster/' . $temporary_reservation->id . '/edit') }}"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>-->
            
            </div>
     
        </div>



@endsection