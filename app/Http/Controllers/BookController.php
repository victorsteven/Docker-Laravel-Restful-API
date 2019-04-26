<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    public function index()
    {
        //Fetch all books:
        $books = Book::all();

        if ($books){
            return response()->json(['Successfully retrieved books', $books ]);
        } else {
            return response()->json(['Error retrieving data', 400]);
        }
    }

    public function show(Book $book)
    {
        return $book;
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());

        return response()->json($book, 200);
    }

    public function delete(Book $book)
    {
        $book->delete();

        return response()->json(null, 204);
    }
}
