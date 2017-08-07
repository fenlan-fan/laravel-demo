<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function welcome () {

        $books = Book::paginate(12);

        return view('welcome', [
            'books' => $books,
        ]);
    }

    public function detail($id) {

        $book = Book::find($id);

        return view('book.detail', [
            'book' => $book,
        ]);
    }
}
