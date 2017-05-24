@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="page-header">
    <h1>Dashboard</h1>
    </div>
    
    <div class="dashboard-links">
        <a href="/roster">Rooster</a>
        <a href="/invoice">Facturen</a>
        <a href="/archive">Archief</a>
        <a href="/admin">Admin Panel</a>
    </div>
    
</div>
@endsection