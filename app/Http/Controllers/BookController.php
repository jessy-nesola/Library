<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');                            // questo protegge TUTTI i metodi
        $this->middleware('auth')->only('create');            // questo protegge SOLO i metodi specificati
        //$this->middleware('auth')->except('index','show');      // questo protegge tutti i metodi TRANNE quelli specificati
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
        //return view('index', compact('books'));

        // return view('index', [
        //     'books' => Book::all()
        // ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BookStoreRequest $request)
    {
        //$extension_name = $request->file('image')->getClientOriginalExtension();


        $path_image = '';
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
            'uri' => Str::slug($request->name, '-')
        ]);
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
        // $book = Book::find($book);


        // $book = Book::find($book);
        // if (!$book) {
        //     abort(404);
        // }

        //$book = Book::findOrFail($book);
        return view('books.show', compact('book'));
    }
}
