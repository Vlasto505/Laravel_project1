<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function create() {
        return view('profile.form'); // Tu si vytvorte jednoduchý form s inputom "n"
    }

    public function store(Request $request) {
        $n = (int) $request->input('n', 0);

        // Lucasova postupnosť: n, n+1, ...
        $sequence = [$n, $n + 1];
        for ($i = 2; $i < 10; $i++) {
            $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
        }

        return view('profile.result', [
            'sequence' => $sequence,
            'type' => 'Controller Route'
        ]);
    }
}
