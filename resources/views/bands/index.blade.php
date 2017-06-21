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
        @foreach($bands as $band)
        <tr class="clickable-row" data-url="/bands/{{ $band->id }}">
            <td>{{ $band->id}}</td>
            <td>{{ $band->band_name }}</td>
            <td>{{ $band->band_credits }}</td>
            <td><a href="{{ url('/bands', array('id' => $band->id)) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-info-sign"> Info</span></button></a></td>
            <td><a href="{{ url('/bands/' . $band->id . '/edit') }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"> Bijwerken</span></button></a></td>
            {!! Form::open(array('route' => array('bands.destroy', $band->id), 'method' => 'delete')) !!}
            <td><button class="btn btn-danger"  data-toggle="confirmation" type="submit"><i class="fa fa-times"></i><span class="glyphicon glyphicon-trash"> Verwijder</span></button></td>
            {!! Form::close() !!}
        </tr>
        @endforeach
        </tbody>

    </table>
    <br>
    <a href="/adminpanel">Keer terug naar het dashboard.</a>
</div>
@endsection