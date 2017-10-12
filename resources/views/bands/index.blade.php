@extends('layouts.app')
@section('content')

<div class="container">
    <table class="display table table-bordered table-condensed table-responsive dynamic-table">
        <b><h1><a href="{{ url('/bands/create') }}">Voeg band toe</a></h1></b>
        <thead>
            <tr>
                <th>Bandnummer: </th>
                <th>Band naam: </th>
                <th>Credits: </th>
            </tr>
        </thead>

        <tbody>
        <br>
        @foreach($bandsToShow as $bandToShow)
        <tr class="clickable-row" data-url="/bands/{{ $bandToShow->id }}">
            <td>{{ $bandToShow->id}}</td>
            <td>{{ $bandToShow->band_name }}</td>
            <td>{{ $bandToShow->band_credits }}</td>
            <td><a href="{{ url('/bands', array('id' => $bandToShow->id)) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-info-sign"> Info</span></button></a></td>
            <td><a href="{{ url('/bands/' . $bandToShow->id . '/edit') }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"> Bijwerken</span></button></a></td>
            {!! Form::open(array('route' => array('bands.destroy', $bandToShow->id), 'method' => 'delete')) !!}
            <td><button class="btn btn-danger delBtn" onclick="return confirm('Weet je zeker dat je deze band wilt verwijderen?')" data-toggle="confirmation" type="submit">Verwijderen</button></td>
            {!! Form::close() !!}
        </tr>
        @endforeach
        </tbody>

    </table>
    <br>
    <a href="/adminpanel">Keer terug naar het dashboard.</a>
</div>
@endsection