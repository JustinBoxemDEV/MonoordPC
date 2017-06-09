@extends('layouts.app')
    {{ Form::open(array('route' => 'users.store')) }}
        @include('users.form');
    {{ Form::close() }}