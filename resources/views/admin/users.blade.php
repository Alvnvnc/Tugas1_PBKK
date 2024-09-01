@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Admin Users Example</h2>
        <p>This page is part of the admin route group, demonstrating how multiple routes can share a common prefix.</p>
        <p>In Laravel, this route is also part of the <code>admin</code> prefix group:</p>
        <pre><code>
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return view('admin.users');
    })->name('admin.users');
});
        </code></pre>
        <p>The <code>users</code> route is accessed via <code>/admin/users</code>.</p>
    </div>
@endsection
