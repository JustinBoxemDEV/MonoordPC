@extends('layouts.app')

@section('content')

{!! Form::model($person, array('route' => array('person.update', $person->id), 'method' => 'put')) !!}


@include('persons.form')

 <!-- Cancel Button -->
 <a href="{{ url('/person/' . $person->id) }}" class="btn btn-danger"  data-toggle="confirmation" role="button">@lang('misc.cancel')</a>

{!! Form::close() !!}


@endsection

