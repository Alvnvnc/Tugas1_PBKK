@extends('layouts.app')

@section('title', 'Fibonacci')

@section('content')
<div class="container mt-5">
    <h2>Fibonacci</h2>
    <form method="GET" action="{{ route('fibonacci') }}">
        <label for="n">Enter a Number:</label>
        <input type="number" id="n" name="n" value="{{ old('n', $n) }}" required>
        <button type="submit">Submit</button>
    </form>

    @if($n !== null)
        <div class="result mt-3">
            @php
                $a = 0;
                $b = 1;
                if ($n == 1) {
                    $fibonacciResult = $a;
                } else if ($n == 2) {
                    $fibonacciResult = $b;
                } else {
                    for ($i = 2; $i < $n; $i++) {
                        $fibonacciResult = $a + $b;
                        $a = $b;
                        $b = $fibonacciResult;
                    }
                }
            @endphp
            <p>The Fibonacci number at position {{ $n }} is {{ $fibonacciResult }}.</p>
        </div>
    @endif
</div>
@endsection
