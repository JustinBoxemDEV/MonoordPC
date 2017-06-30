@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Rooster</div>

                <div class="panel-body">
                    <div class="dashboard-overview">

                        <div class='roster_table'>
                            <h1>{{$currentDay}}</h1>
                <table class="display table table-bordered table-condensed table-responsive dynamic-table">
                    
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
                    @foreach($temporary_reservations as $temporary_reservation)
                    <tr class="clickable-row" data-url="/roster/{{ $temporary_reservation->id }}">
                        <td>
                            <h1>XX:XX</h1>
                        </td>
                        <td>
                            <b>Band: </b>{{ $temporary_reservation->Band->band_name}} <br>
                            <b>Datum: </b> {{ $temporary_reservation->temp_reservation_date }} <br>
                            <b>Zaal: </b> {{ $temporary_reservation->Room->room_name }}</td>
                        <td>{{ $temporary_reservation->Payment_Method->payment_method_name }}</td>
                        <td><a href="{{ url('/roster/' . $temporary_reservation->id . '/edit') }}"><button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button></a></td>
                        <td><a href="{{ url('/roster/' . $temporary_reservation->id . '/edit') }}"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a></td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            
        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
