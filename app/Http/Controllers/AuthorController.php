<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        // return view(
        //     'authors.index',
        //     [
        //         'authors' => Author::all()
        //     ]
        // );
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {

        Author::create([
            'firstname' => $request->input('firstname', 'Tizio'),
            'lastname' => $request->lastname,
            'birthday' => $request->birthday,
        ]);

        return redirect()->route('authors.index')->with('success', 'Autore Creato');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->lastname,
            'birthday' => $request->birthday,
        ]);

        return redirect()->route('authors.index')->with('success', 'Autore Modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Autore Cancellato');
    }
    // public function massive_destroy($ids)
    // {

    //     //$author->delete(); //questo riferto ad oggetti
    //     Author::destroy($ids); //questo classe da chiamare in maneira statica
    // }
}
