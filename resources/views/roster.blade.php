@extends('layouts.roster_table')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Rooster</div>

                <div class="panel-body">
                    <div class="dashboard-overview">

                        <div class='roster_table'>
                
                <table class="display table table-bordered table-condensed table-responsive dynamic-table">
                    
                    <thead>
                        <tr>
                            <th>Band: </th>
                            <th>Zaal: </th>
                            <th>Betaalmethode: </th>
                            <th>Datum: </th>
                            <th>Placeholder (delayed): </th>
                        </tr>
                    </thead>

                    <tbody>
                    <br>
                    @foreach($temporary_reservations as $temporary_reservation)
                    <tr class="clickable-row" data-url="/roster/{{ $temporary_reservation->id }}">
                        <td>{{ $temporary_reservation->Band->band_name}}</td>
                        <td>{{ $temporary_reservation->Room->room_name }}</td>
                        <td>{{ $temporary_reservation->Payment_Method->payment_method_name }}</td>
                        <td>{{ $temporary_reservation->temp_reservation_date }}</td>
                        <td>{{ $temporary_reservation->temp_delayed }}</td>
                         <td><a href="{{ url('/roster/' . $temporary_reservation->id . '/edit') }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"> Bijwerken</span></button></a></td>
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
