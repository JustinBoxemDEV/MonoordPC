
    <h3 id="nav" class="page-header">Edit</h3>

    <div class="panel panel-default">
        <div class="panel-body">
            {!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'put', 'class' => 'val-form', 'data-toggle' => 'validator')) !!}

                @include('users.form')
            {!! Form::close() !!}
        </div>
    </div>