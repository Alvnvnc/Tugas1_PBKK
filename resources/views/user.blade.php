@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Route Parameters Example</h2>
        <p>This route example demonstrates how to pass parameters through the URL and use them in your views.</p>
        <p>Current User ID: <strong>{{ $id }}</strong></p>
        <p>In Laravel, you can define a route with parameters in the `web.php` file like this:</p>
        <pre><code>
Route::get('/user/{id}', function ($id) {
    return view('user', ['id' => $id]);
})->name('user.show');
        </code></pre>
        <p>This route captures a dynamic parameter <code>{id}</code> from the URL and passes it to the <code>user.blade.php</code> view.</p>
    </div>
@endsection
