<h3 class="page-header">Band: {{ $band->name }}<br></h3>

<table class="table table-condensed table-responsive">
    <tbody>
        <tr>
        </tr>
    </tbody>
</table>
<a href="{{ url('/bands/' . $band->id . '/edit') }}" class="btn btn-warning pull-left right-margin">
    <i class="fa fa-pencil-square-o"></i>Update
</a>
<a href="/bands">Return</a>