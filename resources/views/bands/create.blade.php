
    {{ Form::open(array('route' => 'bands.store')) }}
        @include('bands.form');
    {{ Form::close() }}