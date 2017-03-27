@extends('layouts.app')

@section('content')

<br/>
<a href="{{ url('/personen/create') }}">Voeg contactpersonen toe</a>
<br/>
<table class="display table table-bordered table-condensed table-responsive dynamic-table">
    <thead>
        <tr>
            <th>Initialen</th>
            <th>Achternaam</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>
        @foreach($persons as $person)
        <tr class="clickable-row" data-url="/personen/{{ $person->person_id }}">
            <td>{{ $person->initials }}</td>
            <td>{{ $person->surname }}</td>
            <td>{{ $person->email }}</td>
            <td><a href="{{ url('/personen', array('id' => $person->person_id)) }}">Details</a></td>
            <td><a href="{{ url('/personen/' . $person->person_id . '/edit') }}">Bijwerken</a></td>
            {!! Form::open(array('route' => array('personen.destroy', $person->person_id), 'method' => 'delete')) !!}
            <td><button class="btn btn-danger"  data-toggle="confirmation" type="submit"><i class="fa fa-times"></i>Verwijder</button></td>

            {!! Form::close() !!}
        </tr>
        @endforeach
    </tbody>
</table>
@stop