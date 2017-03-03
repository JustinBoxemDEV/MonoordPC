{!! Form::label('firstname', Lang::get('misc.firstname')) !!}
{!! Form::text('firstname', null, ['class' => 'form-control', 'required']) !!}
<br>
 {!! Form::label('lastname', Lang::get('misc.lastname')) !!}
{!! Form::text('lastname', null, ['class' => 'form-control', 'required']) !!}
<br>
 {!! Form::label('email', Lang::get('misc.email')) !!}
{!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}

<br>
<br>
{!! Form::submit(Lang::get('misc.make_appointment'), ['class' => 'btn btn-success', 'id' => 'btn-save']) !!}


