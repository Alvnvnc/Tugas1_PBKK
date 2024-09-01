@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Route Groups Example</h2>
        <p>This example demonstrates how to use route groups in Laravel to apply common attributes to multiple routes.</p>
        <p>In Laravel, you can define a route group in the `web.php` file like this:</p>
        <pre><code>
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
        </code></pre>
        <p>This route group applies the <code>admin</code> prefix to all routes inside the group. The <code>dashboard</code> route is accessed via <code>/admin/dashboard</code>.</p>
    </div>
@endsection
