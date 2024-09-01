@extends('layouts.app')

@section('title', 'Genap dan Ganjil')

@section('content')
<div class="container mt-5">
    <h2>Genap dan Ganjil</h2>
    <form method="GET" action="{{ route('genapganjil') }}">
        <label for="n">Enter a Number::</label>
        <input type="number" id="n" name="n" value="{{ old('n', $n) }}" required>
        <button type="submit">Submit</button>
    </form>

    @if($n !== null)
        <div class="result mt-3">
            <p>{{ $n }} adalah {{ $n % 2 == 0 ? 'genap' : 'ganjil' }}.</p>
        </div>
    @endif
</div>
@endsection
