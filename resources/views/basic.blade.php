@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="home-container">
    <h1>Welcome to Number Calculations</h1>
    <p>Select an option below to begin:</p>
    
    <div class="button-container">
        <a href="{{ route('genapganjil') }}" class="home-button">Genap & Ganjil</a>
        <a href="{{ route('fibonacci') }}" class="home-button">Fibonacci</a>
        <a href="{{ route('prima') }}" class="home-button">Prime Numbers</a>
    </div>
</div>
@endsection
