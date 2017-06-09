<h3 class="page-header">Gebruiker: {{ $user->name }}<br></h3>

<table class="table table-condensed table-responsive">
    <tbody>
        <tr>
        </tr>
    </tbody>
</table>
<a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-warning pull-left right-margin">
    <i class="fa fa-pencil-square-o"></i>Update
</a>
<a href="/users">Return</a>