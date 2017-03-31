@extends('layouts.app')

@section('content')

{!! Form::model($person, array('route' => array('personen.update', $person->person_id), 'method' => 'put')) !!}


@include('personen.form')

 <!-- Cancel Button -->
 <a href="{{ url('/personen/' . $person->person_id) }}" class="btn btn-danger"  data-toggle="confirmation" role="button">'cancel'</a>

{!! Form::close() !!}


@endsection

