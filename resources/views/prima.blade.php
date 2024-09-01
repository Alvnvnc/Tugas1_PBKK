@extends('layouts.app')

@section('title', 'Prime Numbers')

@section('content')
<div class="container mt-5">
    <h2>Prime Numbers</h2>
    <form method="GET" action="{{ route('prima') }}">
        <label for="n">Enter a Number:</label>
        <input type="number" id="n" name="n" value="{{ old('n', $n) }}" required>
        <button type="submit">Submit</button>
    </form>

    @if($n !== null)
        <div class="result mt-3">
            @php
                function isPrime($num) {
                    if ($num < 2) return false;
                    for ($i = 2; $i <= sqrt($num); $i++) {
                        if ($num % $i == 0) return false;
                    }
                    return true;
                }

                $isPrimeResult = isPrime($n);
            @endphp
            <p>{{ $n }} is {{ $isPrimeResult ? '' : 'not ' }}a prime number.</p>
        </div>
    @endif
</div>
@endsection
