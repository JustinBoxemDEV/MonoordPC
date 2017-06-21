@extends('layouts.app')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Gebruikersbeheer</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">{{ Form::label('name', 'Gebruikersnaam: ') }}</div>
                <div class="col-lg-6">{{ Form::text('name')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('password', 'Wachtwoord: ') }}</div>
                <div class="col-lg-6">{{ Form::password('password')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('email', 'Email: ') }}</div>
                <div class="col-lg-6">{{ Form::email('email')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('firstname', 'Voornaam: ') }}</div>
                <div class="col-lg-6">{{ Form::text('firstname')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('lastname', 'Achternaam: ') }}</div>
                <div class="col-lg-6">{{ Form::text('lastname')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('is_admin', 'Administrator: ') }}</div>
                <div class="col-lg-6">{{ Form::checkbox('is_admin')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('is_verified', 'Bevestigd: ') }}</div>
                <div class="col-lg-6">{{ Form::checkbox('is_verified')}}</div>
            </div>
            {{ Form::submit('Opslaan') }}
            <!-- Cancel Button -->
                <a href="{{ url('/users') }}" class="btn btn-danger"  data-toggle="confirmation" role="button">Cancel</a>
        </div>
    </div>
</div>
@endsection


