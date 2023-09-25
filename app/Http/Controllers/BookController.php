<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Str;

class BookController extends Controller
{


    public function __construct()
    {
        //$this->middleware('auth'); //Protegge TUTTI i metodi
        $this->middleware('auth')->only('create'); //Protegge Solo i metodi speicifcati
        //$this->middleware('auth')->except('index', 'show'); //Protegge TUTTO, tranne  i metodi speicifcati
    }

    public function index()
    {
        $books = Book::all(); // Dammi tutti i libri presenti nella tabella


        return view('books.index', ['books' => $books]);
        //return view('index', compact('books'));

        // return view('index', [
        //     'books' => Book::all()
        // ]);
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(BookStoreRequest $request)
    {
        //$extension_name = $request->file('image')->getClientOriginalExtension();


        $path_image = ''; // inserire public/assets/images/default.jpg
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            //$path_image = $request->file('image')->store();//Metodo semplice
            $path_image = $request->file('image')->storeAs('public/images', $file_name); //Scrivo nel server
            // } else {
            //     $path_image = 'default.jpeg';
        }
        //primo metodo
        //Book::create($request->all());
        //secondo metodo

        Book::create([
            'name' => $request->name,
            'pages' => $request->pages,
            'year' => $request->year,
            'image' => $path_image,
            'author_id' => $request->author_id,
            'uri' => Str::slug($request->name, '-')
        ]);
        //$book->update(['uri' => Str::slug($book->name .  $book->id, '-')]);
        //Terzo metodo
        // $request->validate([
        //     'name' => 'required',
        //     'pages' => 'required'
        // ]);
        //Book::create($request->validated());
        return redirect()->route('books.index')->with('success', 'Libro Caricato');
    }

    public function show(Book $book)
    {

        //$book = Book::find($book);
        //$book = Book::where('uri', $book->slug)->first();

        // $book = Book::find($book);
        // if (!$book) {
        //     abort(404);
        // }

        //$book = Book::findOrFail($book);

        //Ricerca tramite URI

        //$book = Book::where('uri', $book)->first(); //Serve a cercare la stringa $book dentro la colonna uri

        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all(); 
        return view('books.edit', compact('book', 'authors'));
    }

    public function update(BookUpdateRequest $request, Book $book)
    {
        $path_image = $book->image; // inserire immagine gia presente
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $file_name); //Scrivo nel server 
        }

        $book->update([
            'name' => $request->name,
            'pages' => $request->pages,
            'year' => $request->year,
            'image' => $path_image,
            'author_id' => $request->author_id,
            // 'uri' => Str::slug($request->name, '-')
        ]);

        return redirect()->route('books.index')->with('success', 'Libro Aggiornato');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Libro Eliminato');
    }
}