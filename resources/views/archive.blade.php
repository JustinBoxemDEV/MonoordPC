@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="page-header">
        <div class="row">
            <div class="col-lg-4"><h1>Dashboard</h1></div>
        </div>
    </div>
    
    <div class="dashboard-links">
        <a href="/roster">Rooster</a>
        <a href="/invoice">Facturen</a>
        <a href="/archive">Archief</a>
        <a href="/adminpanel">Admin Panel</a>
        <hr>
    </div>
    
    <br>
    <br> 
    
        <div class="dashboard-overview">
        
            <div class="roster_table">
                
                <table class="display table table-bordered table-condensed table-responsive dynamic-table">
                    
                    <thead>
                        <tr>
                            <th>Tijd</th>
                            <th>Reservering data</th>
                            <th>Bewerk</th>
                        </tr>
                    </thead>

                    <tbody>
                    <br>
                    @foreach($tempReservations as $tempReservation)
                    <tr class="clickable-row" data-url="/archive/{{ $tempReservation->id }}">
                        <td>
                            <h1>XX:XX</h1>
                        </td>
                        <td>
                            <b>Band: </b>{{ $tempReservation->id}} <br>
                            <b>Betaalmethode: </b> {{ $tempReservation->Payment_Method->payment_method_name }} <br>
                            <b>Datum: </b> {{ $tempReservation->temp_reservation_date }} <br>
                            <b>Zaal: </b> {{ $tempReservation->Room->room_name }} <br>           
                       <td><a href="{{ url('/archive/' . $tempReservation->id . '/edit') }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"> Bijwerken</span></button></a></td>
                    </tr>
                    @endforeach
                    @foreach($reservations as $reservation)
                    <tr class="clickable-row" data-url="/archive/{{ $reservation->id }}">
                        <td>
                            <h1>XX:XX</h1>
                        </td>
                        <td>
                            <b>Band: </b>{{ $reservation->id}} <br>
                            <b>Betaalmethode: </b> {{ $reservation->Payment_Method->payment_method_name }} <br>
                            <b>Zaal: </b> {{ $reservation->Room->room_name }} <br>           
                       <td><a href="{{ url('/archive/' . $reservation->id . '/edit') }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"> Bijwerken</span></button></a></td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            
            </div>
     
        </div>
@endsection
