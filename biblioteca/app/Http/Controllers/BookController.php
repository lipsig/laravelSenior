<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'publication_year' => 'required|integer',
        ]);

        $book = Book::create($validatedData);

        return response()->json($book, 201);
    }

    public function index()
    {
        $books = Book::all();

        return response()->json($books);
    }

    public function show(Book $book)
    {
        return response()->json($book);
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'publication_year' => 'required|integer',
        ]);

        $book->update($validatedData);

        return response()->json($book);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json(null, 204);
    }
}
