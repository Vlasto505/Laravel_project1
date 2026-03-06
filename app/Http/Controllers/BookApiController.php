<?php

namespace App\Http\Controllers;

use App\Services\BookService; // 1. Uvozimo servis (strana 34)
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookApiController extends Controller
{
    /**
     * GET api/restapi/books
     * Koristi Dependency Injection za ubacivanje BookService-a.
     */
    public function index(BookService $bookService)
    {
        // Logiku dobijanja podataka prepuštamo servisu (strana 34)
        $books = $bookService->getAllBooks();

        return response()->json(['data' => $books], Response::HTTP_OK);
    }

    /**
     * POST api/restapi/books
     */
    public function store(Request $request)
    {
        $book = [
            'title'  => $request->input('title'),
            'author' => $request->input('author'),
        ];

        return response()->json([
            'message' => 'Kniha bola vytvorená',
            'data' => $book
        ], Response::HTTP_CREATED);
    }

    /**
     * GET api/restapi/books/{id}
     */
    public function show(string $id)
    {
        $book = [
            'id'    => $id,
            'title' => 'Tri gaštanové kone',
            'author' => 'Margita Figuli',
        ];

        return response()->json(['data' => $book], Response::HTTP_OK);
    }

    /**
     * PUT api/restapi/books/{id}
     */
    public function update(Request $request, string $id)
    {
        $book = [
            'id'     => $id,
            'title'  => $request->input('title'),
            'author' => $request->input('author'),
        ];

        return response()->json([
            'message' => 'Kniha bola upravená',
            'data' => $book
        ], Response::HTTP_OK);
    }

    /**
     * DELETE api/restapi/books/{id}
     */
    public function destroy(string $id)
    {
        return response()->json([
            'message' => "Kniha s ID {$id} bola vymazaná"
        ], Response::HTTP_OK);
    }
}
