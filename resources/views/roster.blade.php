@extends('layouts.roster_style')

@section('content')

<table class="table table-bordered">
        
<tr> 
    <th> </th>
@foreach($rooms as $room)
<th> {{ $room }} </th>  
@endforeach  
</tr>

<tr>
@for($count = 0; $count < 56; $count++)
<tr> <td> {{ $times[$count] }} </td> </tr>

@endfor
</tr>

    
    

</table>

@endsection