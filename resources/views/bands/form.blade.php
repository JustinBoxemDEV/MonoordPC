@extends('layouts.app')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Bandbeheer</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">{{ Form::label('band_name', 'Bandnaam: ') }}</div>
                <div class="col-lg-6">{{ Form::text('band_name')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('band_credits', 'Credits: ') }}</div>
                <div class="col-lg-6">{{ Form::number('band_credits')}}</div>
            </div>
            {{ Form::submit('Opslaan') }}
            <!-- Cancel Button -->
                <a href="{{ url('/bands') }}" class="btn btn-danger"  data-toggle="confirmation" role="button">Cancel</a>
        </div>
    </div>
</div>
@endsection


