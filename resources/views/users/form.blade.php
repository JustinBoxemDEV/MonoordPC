@extends('layouts.app')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Admin toevoegscherm</div>
        <div class="panel-body">
            
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                        <!-- Voornaam -->
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">Voornaam</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Achternaam -->
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Achternaam</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
            
<!--            <div class="row">
                <div class="col-lg-6">{{ Form::label('password', 'Wachtwoord: ') }}</div>
                <div class="col-lg-6">{{ Form::password('password')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('email', 'Email: ') }}</div>
                <div class="col-lg-6">{{ Form::email('email')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('firstname', 'Voornaam: ') }}</div>
                <div class="col-lg-6">{{ Form::text('firstname')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('lastname', 'Achternaam: ') }}</div>
                <div class="col-lg-6">{{ Form::text('lastname')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('is_admin', 'Administrator: ') }}</div>
                <div class="col-lg-6">{{ Form::checkbox('is_admin')}}</div>
            </div>
            <div class="row">
                <div class="col-lg-6">{{ Form::label('is_verified', 'Bevestigd: ') }}</div>
                <div class="col-lg-6">{{ Form::checkbox('is_verified')}}</div>
            </div>
            {{ Form::submit('Opslaan') }}
             Cancel Button 
                <a href="{{ url('/users') }}" class="btn btn-danger"  data-toggle="confirmation" role="button">Cancel</a>
        </div>-->
    </div>
</div>
@endsection


