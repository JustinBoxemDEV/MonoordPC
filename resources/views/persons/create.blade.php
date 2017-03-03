@extends('layouts.app')

@section('content')


{{ Form::open(array('route' => 'person.store')) }}
@include('persons.form')

{{ Form::close() }}

@endsection

