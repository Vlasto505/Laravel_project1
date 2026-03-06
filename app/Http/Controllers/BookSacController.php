<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookSacController extends Controller
{
    // MORA biti __invoke (sa dve donje crte)
    public function __invoke(Request $request, int $id)
    {
        $format = $request->input('format', 'nepoznat');
        return response("Toto je kniha s ID = {$id} vo formate: {$format}.");
    }
}
