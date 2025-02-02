<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->input('search');
        
        $allBook = Book::when($search, function ($query, $search) {
            return $query->where('book_id', 'like', "%$search%")
                         ->orWhere('category', 'like', "%$search%");
        })->get();

        return view('home', compact('allBook'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBook = Book::all();
        // dd($allBook);
        return view('admin', compact('allBook'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'book_id'=> 'required|unique:books',
            'category'=> 'required',
            'book_name'=> 'required',
            'price'=> 'required',
            'stock'=> 'required',
            'publisher'=> 'required', 
        ]);

        Book::create($validation);

        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validation = $request->validate([
            'category'=> 'required',
            'book_name'=> 'required',
            'price'=> 'required',
            'stock'=> 'required',
            'publisher'=> 'required', 
        ]);
    
        $book->update($validation);
    
        return redirect()->route('admin')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book -> delete();
        return redirect('admin')->with('error', 'Song not found');
    }
}
