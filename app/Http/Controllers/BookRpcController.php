<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRpcController extends Controller
{
    public function borrowBook(Request $request, int $id)
    {
        $userid = $request->input('userid');
        return response(
            "Pouzivatel s ID {$userid} si pozical knihu s ID {$id}."
        );
    }
    public function returnBook(Request $request, int $id){
        $condition =$request->input('condition');
        return response(
            "Kniha s ID {$id} bola vratena v stave: {$condition}."
        );
    }
}
