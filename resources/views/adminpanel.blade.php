@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style='font-size: 300%'>Admin Paneel</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            
                            <div class="jumbotron">
                                <a href="/users">Gebruikers</a>
                                <p style='font-size: 100%'>(Gebruiker overzicht met de mogelijkheid om admins toe te voegen en gegevens bij te werken)</p>
                            </div>
                            <div class="jumbotron">
                                <a href="/bands">Bands</a>
                                <p style='font-size: 100%'>(Band overzicht met de mogelijkheid om bands toe te voegen en gegevens bij te werken)</p>
                            </div>
                            
                        </div>
                        <div class='col-lg-6'>
                            
                            <div class="jumbotron" style="
                                background: url(http://vedetti.nl/wp-content/uploads/2017/03/mon.jpg) 
                                no-repeat center center fixed; 
                                -webkit-background-size: cover;
                                -moz-background-size: cover;
                                -o-background-size: cover;
                                background-size: cover;">
                            </div>
                        
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
