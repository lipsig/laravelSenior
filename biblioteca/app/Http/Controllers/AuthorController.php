<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Cria um autor e retorna-o no response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'date_of_birth' => 'required|date',
        ]);

        $author = Author::create($validatedData);

        return response()->json($author, 201);
    }

    /**
     * Retorna todos os autores
     */
    public function index()
    {
        $authors = Author::all();

        return response()->json($authors);
    }

    /**
     * Retorna um autor específico
     */
    public function show(Author $author)
    {
        return response()->json($author);
    }

    /**
     * Atualiza um autor e retorna-o no response
     */
    public function update(Request $request, Author $author)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'date_of_birth' => 'required|date',
        ]);

        $author->update($validatedData);

        return response()->json($author);
    }

    /**
     * Deleta um autor
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return response()->json(null, 204);
    }
}

