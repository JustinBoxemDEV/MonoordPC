@extends('layouts.app')

@section('content')

<br/>
<a href="{{ url('/person/create') }}">Add Contact</a>
<br/>
<table class="display table table-bordered table-condensed table-responsive dynamic-table">
    <thead>
        <tr>
            <th>@lang('misc.firstname')</th>
            <th>@lang('misc.lastname')</th>
            <th>@lang('misc.email')</th>
        </tr>
    </thead>

    <tbody>
        @foreach($persons as $person)
        <tr class="clickable-row" data-url="/person/{{ $person->id }}">
            <td>{{ $person->firstname }}</td>
            <td>{{ $person->lastname }}</td>
            <td>{{ $person->email }}</td>
            <td><a href="{{ url('/person', array('id' => $person->id)) }}">@lang('misc.show')</a></td>
            <td><a href="{{ url('/person/' . $person->id . '/edit') }}">@lang('misc.update')</a></td>
            {!! Form::open(array('route' => array('person.destroy', $person->id), 'method' => 'delete')) !!}
            <td><button class="btn btn-danger"  data-toggle="confirmation" type="submit"><i class="fa fa-times"></i> @lang('misc.delete')</button></td>

            {!! Form::close() !!}
        </tr>
        @endforeach
    </tbody>
</table>
@stop