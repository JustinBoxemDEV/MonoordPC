@extends('layouts.app')
@section('content')

<div class="container">
    <table class="display table table-bordered table-condensed table-responsive dynamic-table">
        <b><h1><a href="{{ url('/users/create') }}">Voeg gebruiker toe</a></h1></b>
        <thead>
            <tr>
                <th>Email: </th>
                <th>Voornaam: </th>
                <th>Achternaam: </th>
                <th>Administrator: </th>
                <th>Bevestigd: </th>
            </tr>
        </thead>

        <tbody>
        <br>
        @foreach($usersToShow as $userToShow)
        <tr class="clickable-row" data-url="/users/{{ $userToShow->id }}">
            <td>{{ $userToShow->email }}</td>
            <td>{{ $userToShow->firstname }}</td>
            <td>{{ $userToShow->lastname }}</td>
            <td>{{ $userToShow->is_admin ? 'Ja' : 'Nee'}}</td>
            <td>{{ $userToShow->is_verified ? 'Ja' : 'Nee'}}</td>
            <td><a href="{{ url('/users', array('id' => $userToShow->id)) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-info-sign"> Info</span></button></a></td>
            <td><a href="{{ url('/users/' . $userToShow->id . '/edit') }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"> Bijwerken</span></button></a></td>
            {!! Form::open(array('route' => array('users.destroy', $userToShow->id), 'method' => 'delete')) !!}
            <td><button class="btn btn-danger" data-toggle="confirmation" type="submit">Verwijderen</button></td>
            {!! Form::close() !!}
        </tr>
        @endforeach
        </tbody>

    </table>
    <br>
    <a href="/adminpanel">Keer terug naar het dashboard.</a>
</div>
@endsection