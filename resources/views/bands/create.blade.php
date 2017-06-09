@extends('layouts.app')
    {{ Form::open(array('route' => 'bands.store')) }}
        @include('users.form');
    {{ Form::close() }}