@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Named Routes Example</h2>
        <p>This example demonstrates the use of named routes in Laravel.</p>
        <p>Named routes allow you to refer to routes when generating URLs or redirects, rather than hard-coding them.</p>
        <p>In Laravel, you can define a named route in the `web.php` file like this:</p>
        <pre><code>
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
        </code></pre>
        <p>This route is named <code>profile</code> and can be referred to using the route helper: <code>route('profile')</code>.</p>
        <p>For example: <a href="{{ route('profile') }}">Go to Profile</a></p>
    </div>
@endsection
