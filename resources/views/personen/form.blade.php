{!! Form::label('intialen', 'Initialen') !!}
{!! Form::text('initials', null, ['class' => 'form-control', 'required']) !!}
<br>
{!! Form::label('achternaam', 'Achternaam') !!}
{!! Form::text('surname', null, ['class' => 'form-control', 'required']) !!}
<br>
{!! Form::label('wachtwoord', 'Wachtwoord') !!}
{!! Form::text('password', null, ['class' => 'form-control', 'required']) !!}
<br>
 {!! Form::label('email', 'Email') !!}
{!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
<br>
<br>
{!! Form::submit('Maak contactpersoon aan', ['class' => 'btn btn-success', 'id' => 'btn-save']) !!}


