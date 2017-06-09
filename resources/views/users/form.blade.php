@extends('layouts.app')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Gebruikersbeheer</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">{{ Form::label('id', 'Gebruikersnummer: ') }}</div>
                <div class="col-lg-6">{{ Form::number('id')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('name', 'Naam: ') }}</div>
                <div class="col-lg-6">{{ Form::text('name')}}</div>
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
                <div class="col-lg-6">{{ Form::select('is_admin')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('is_verified', 'Bevestigde gebruiker?: ') }}</div>
                <div class="col-lg-6">{{ Form::select('is_verified')}}</div>
            </div>
            {{ Form::submit('Opslaan') }}
        </div>
    </div>
</div>
@endsection


