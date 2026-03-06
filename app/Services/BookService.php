<?php

namespace App\Services;

class BookService
{
    public function getAllBooks(): array
    {
        // Logika za dobijanje podataka (ovde simuliramo bazu)
        return [
            ['id' => 1, 'title' => '3 gaštanové kone', 'author' => 'Margita Figuli'],
            ['id' => 2, 'title' => 'Jozef Mak', 'author' => 'Jozef Cíger Hronský'],
            ['id' => 3, 'title' => '1000-ročná včela', 'author' => 'Peter Jaroš'],
        ];
    }
}
