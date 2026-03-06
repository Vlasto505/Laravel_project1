<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRestController extends Controller
{
    // GET /api/rest/books (strana 19)
    public function index() {
        $books = [
            ['id' => 1, 'title' => 'Tri gaštanové kone', 'author' => 'Margita Figuli'],
            ['id' => 2, 'title' => 'Jozef Mak', 'author' => 'Jozef Cíger Hronský'],
            ['id' => 3, 'title' => 'Tisícročná včela', 'author' => 'Peter Jaroš'],
        ];
        return response(['books' => $books]);
    }

    // GET /api/rest/books/create (strana 19)
    public function create() {
        return response("Zobrazujem formulár pre pridanie novej knihy.");
    }

    // POST /api/rest/books (strana 19)
    public function store(Request $request) {
        $title = $request->input('title');
        return response("Kniha s názvom '$title' bola vytvorená.");
    }

    // GET /api/rest/books/{id} (strana 21)
    public function show(string $id) {
        return response("Zobrazuje sa kniha s ID = $id.");
    }

    // PUT /api/rest/books/{id} (strana 21)
    public function update(Request $request, string $id) {
        $newTitle = $request->input('title');
        $author = $request->input('author'); // Dodaj ovo da bi izvukao autora iz requesta

        // Izmeni return da uključiš i autora
        return response("Kniha s ID = $id bol upravená na '$newTitle' - '$author'.");
    }


    // DELETE /api/rest/books/{id} (strana 21)
    public function destroy(string $id) {
        return response("Kniha s ID $id bola vymazaná.");
    }
}
