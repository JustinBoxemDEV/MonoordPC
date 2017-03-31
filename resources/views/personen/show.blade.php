@extends('layouts.app')

@section('content')

<h3 class="page-header">Persoonsnummer:</h3>{{ $person->person_id }} <br> <h3 class="page-header">Initialen: </h3>{{ $person->initials }} <br>
<h3 class="page-header">Achternaam: </h3>{{ $person->surname }} <br>  <h3 class="page-header">Email: </h3>{{ $person->email }} <br><br>

 <table class="table table-condensed table-responsive">
        <tbody>
        <tr>
            <td><a href="/personen">Keer terug</a></td>
            <td><a href="{{ url('/personen/' . $person->person_id . '/edit') }}">Bijwerken</a></td>
        </tr>
        </tbody>
</table>

@endsection