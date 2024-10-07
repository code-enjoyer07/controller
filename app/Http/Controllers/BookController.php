<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showForm()
    {
        $title = "Form Input Buku";
        return view('form.book', compact('title'));
    }

    public function store(StoreBookRequest $request)
    {
        Book::create($request->validated());
        $result = $request->validated();
        dd($result);
    }
    public function index()
    {
        $books = Book::all();
        $title = "Daftar Buku";
        return view('book', compact('books', 'title'));
    }
}
