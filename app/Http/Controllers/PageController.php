<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
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
        Book::create($request->all());
        return 'ok';
    }
}
