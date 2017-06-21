
    <h3 id="nav" class="page-header">Edit</h3>

    <div class="panel panel-default">
        <div class="panel-body">
            {!! Form::model($band, array('route' => array('bands.update', $band->id), 'method' => 'put', 'class' => 'val-form', 'data-toggle' => 'validator')) !!}

                @include('bands.form')
            {!! Form::close() !!}
        </div>
    </div>