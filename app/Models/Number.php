<?php

namespace App\Models;

class Number
{
    // Method to get Even or Odd numbers
    public static function getGenapGanjil($n)
    {
        $results = [];
        for ($i = 1; $i <= $n; $i++) {
            $results[] = [
                'number' => $i,
                'type' => $i % 2 == 0 ? 'Genap' : 'Ganjil'
            ];
        }
        return $results;
    }

    // Method to get Fibonacci sequence
    public static function getFibonacci($n)
    {
        $results = [];
        $a = 0;
        $b = 1;
        for ($i = 0; $i < $n; $i++) {
            $results[] = [
                'number' => $a,
                'type' => 'Fibonacci'
            ];
            $temp = $a;
            $a = $b;
            $b = $temp + $b;
        }
        return $results;
    }

    // Method to get Prime numbers
    public static function getPrime($n)
    {
        $results = [];
        for ($num = 2; $num <= $n; $num++) {
            $isPrime = true;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                $results[] = [
                    'number' => $num,
                    'type' => 'Prima'
                ];
            }
        }
        return $results;
    }
}
