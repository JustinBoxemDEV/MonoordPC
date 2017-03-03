@extends('layouts.app')

@section('content')

<h3 class="page-header">@lang('misc.contact_id'):</h3>{{ $person->id }} <br> <h3 class="page-header"> @lang('misc.firstname'): </h3>{{ $person->firstname }} <br>
<h3 class="page-header"> @lang('misc.lastname'): </h3>{{ $person->lastname }} <br>  <h3 class="page-header"> @lang('misc.email'): </h3>{{ $person->email }} <br><br>

 <table class="table table-condensed table-responsive">
        <tbody>
        <tr>
            <td><a href="/person">@lang('misc.return')</a></td>
            <td><a href="{{ url('/person/' . $person->id . '/edit') }}">@lang('misc.update')</a></td>
        </tr>
        </tbody>
</table>

@endsection