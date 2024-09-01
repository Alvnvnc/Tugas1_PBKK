<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;

class NumberController extends Controller
{
    // Show form and result for Even/Odd
    public function genapGanjil(Request $request)
    {
        $n = $request->input('n');
        $results = $n ? Number::getGenapGanjil($n) : [];
        return view('genapganjil', compact('results', 'n'));
    }

    // Show form and result for Fibonacci
    public function fibonacci(Request $request)
    {
        $n = $request->input('n');
        $results = $n ? Number::getFibonacci($n) : [];
        return view('fibonacci', compact('results', 'n'));
    }

    // Show form and result for Prime numbers
    public function prima(Request $request)
    {
        $n = $request->input('n');
        $results = $n ? Number::getPrime($n) : [];
        return view('prima', compact('results', 'n'));
    }
}
