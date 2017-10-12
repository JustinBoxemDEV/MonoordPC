<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - Invoice {{ str_pad($invoice->id,5,"0", STR_PAD_LEFT) }}</title>
 
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('/css/font-awesome.min.css') }}" rel="stylesheet">
 
</head>
<body>
 
<style>
    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }
 
    .table > tbody > tr > .no-line {
        border-top: none;
    }
 
    .table > thead > tr > .no-line {
        border-bottom: none;
    }
 
    .btmth {
        border-bottom: 2px solid #ddd;
    }
 
    .btm {
        border-bottom: 1px solid #ddd;
    }
 
    .container {
        background: white;
    }
</style>
 
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-6">
                    <img src="{{url('/img/logo.jpg')}}" class="img-responsive" alt="">
                </div>
 
                <div class="col-xs-2">
                </div>
 
                <div class="col-xs-4">
                    <h2 class="pull-right" style="display: inline-block;">Invoice</h2>
                    <h2 class="pull-right" style="display: inline-block; margin-top: -10px;"># {{ str_pad($invoice->id,5,"0", STR_PAD_LEFT) }}</h2>
                </div>
            </div>
 
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Billed To</strong><br>
                        Company details here<br/>
                        Another line
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Submitted By</strong><br>
                        <i class="fa fa-user" aria-hidden="true"> {{ $user->name }}</i><br>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> {{ $user->email }}<br>
                        <i class="fa fa-mobile" aria-hidden="true"></i> @if(count($user->mobile_number)>0)
                            {!! nl2br($user->mobile_number) !!}
                        @else
                            No mobile number has been submitted.
                        @endif <br>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
 
                    <address>
                        <strong>Invoice Date</strong><br>
                        {{ $invoice->updated_at->format('j F Y') }}<br><br>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Bank Details</strong><br>
                        @if(count($user->bank_details)>0)
                            {!! nl2br($user->bank_details) !!}
                        @else
                            No bank details have been submitted.
                        @endif
                    </address>
                </div>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Invoice Details</strong></h3>
                </div>
 
                <div class="panel-body">
 
                    <div class="row btmth">
                        <div class="col-xs-1">
                            <strong>ID</strong>
                        </div>
                        <div class="col-xs-9">
                            <strong>Details</strong>
                        </div>
                        <div class="col-xs-2 text-right">
                            <strong>Amount</strong>
                        </div>
                    </div>
 
                    @foreach($invoice->lines as $line)
                        <div class="row btm">
                            <div class="col-xs-1">
                                <a href="{{ url('/line/' . $line->id) }}">{{$line->id}}</a>
                            </div>
                            <div class="col-xs-9">
                                {{ $line->created_at }} - Details
                            </div>
                            <div class="col-xs-2 text-right">
                                R {{ sprintf('%0.2f', $line->value) }}
                            </div>
                        </div>
                    @endforeach
 
                    <div class="row">
                        <div class="col-xs-1">
 
                        </div>
                        <div class="col-xs-9 text-right">
                            <strong>Total</strong>
                        </div>
                        <div class="col-xs-2 text-right">
                            <strong>R {{ sprintf('%0.2f', $invoice->total) }}</strong>
                        </div>
                    </div>
 
                </div>
 
            </div>
        </div>
    </div>
</div>
 
</body>
</html>