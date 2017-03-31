@extends('layouts.app')

@section('content')


{{ Form::open(array('route' => 'personen.store')) }}
@include('personen.form')

{{ Form::close() }}

@endsection

