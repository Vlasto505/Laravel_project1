<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {

    public function showForm() {
        $roles = [
            'teacher' => 'učiteľ',
            'student' => 'študent'
        ];

        $skills = ['PHP', 'Laravel', 'HTML', 'CSS', 'JavaScript'];

        return view('profile.form', compact('roles', 'skills'));
    }

    public function processForm(Request $request) {
        // Uzimamo sve podatke, uključujući i 'n'
        $data = $request->only(['name', 'email', 'age', 'role', 'skills', 'n']);
        $data['skills'] = $data['skills'] ?? [];

        // Uzmi n (ako ga nema, stavi 0)
        $n = (int) ($data['n'] ?? 0);

        // LOGIKA ZA BROJ N: Generisanje niza (Lucasova postupnost)
        $sequence = [$n, $n + 1];
        for ($i = 2; $i < 10; $i++) {
            $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
        }

        $additional_data = [
            'isAdult' => (int) $data['age'] >= 18,
            'skillsCount' => count($data['skills']),
            'roleLabel' => $data['role'] === 'teacher' ? 'učiteľ' : 'študent',
            'sequence' => $sequence // Dodajemo niz u dodatne podatke
        ];

        // Šaljemo sve u isti view 'profile.show'
        return view('profile.show', compact('data', 'additional_data'));
    }

}
