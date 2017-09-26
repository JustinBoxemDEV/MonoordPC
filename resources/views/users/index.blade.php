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
        @foreach($users as $user)
        <tr class="clickable-row" data-url="/users/{{ $user->id }}">
            <td>{{ $user->email }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->is_admin ? 'Ja' : 'Nee'}}</td>
            <td>{{ $user->is_verified ? 'Ja' : 'Nee'}}</td>
            <td><a href="{{ url('/users', array('id' => $user->id)) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-info-sign"> Info</span></button></a></td>
            <td><a href="{{ url('/users/' . $user->id . '/edit') }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"> Bijwerken</span></button></a></td>
            {!! Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete')) !!}
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