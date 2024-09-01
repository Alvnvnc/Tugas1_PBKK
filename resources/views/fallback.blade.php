@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
<div class="fallback-container">
    <h1>Oops! Page Not Found</h1>
    <p>Sorry, the page you are looking for does not exist or has been removed.</p>
    <a href="{{ route('home') }}" class="fallback-button">Return to Home</a>
</div>
@endsection
