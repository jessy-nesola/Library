<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() 
    {
        $books = Book::all();
        return view('index', ['books' => $books]);
        // return view('index', [
        //     'books' => Book::all(),
        //     'authors' => Author::all(),
        // ]);
    }

    public function create() 
    {
        return view('create');
    }

    public function store(Request $request) 
    {
        //primo metodo
        //Book::create($request->all());
        
        //secondo metodo
        Book::create([
            'name' => $request->name,
            'pages' => $request->pages,
            'year' => $request->year
        ]);

        //terzo metodo
        // $request->validate({
        //    'name' => 'required',
        //    'pages' => 'required'
        // });
        //Book::create($request->validated());
        return redirect()->route('books.index')->with('success', 'Libro Caricato');
    }

    public function show(Book $book)
    {
        // $book = Book::find($book);


        // $book = Book::find($book);
        // if (!$book) {
        //     abort(404);
        // }

        //$book = Book::findOrFail($book);
        return view('show', compact('book'));
    }
}

