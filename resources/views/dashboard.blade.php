@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Aantal bands: {{ $totalBands }} (lars u can style this to the left plox)</h4>
    <h4>Aantal users: {{ $totalUsers }} (lars u can style this to the right plox)</h4>
    <div class="page-header">
    <h1>Dashboard</h1>
    </div>
    
    <div class="dashboard-links">
        <a href="/roster">Rooster</a>
        <a href="/invoice">Facturen</a>
        <a href="/archive">Archief</a>
        <a href="/adminpanel">Admin Panel</a>
        <hr>
    </div>
    
    <div clas="dashboard-overview">
        <h1>lars, deze div is een "zone" waarin alle reserveringen worden weergegeven
            van deze dag. Feel free to style it wild.
        </h1>
    </div>
    
</div>
@endsection