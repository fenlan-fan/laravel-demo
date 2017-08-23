<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function welcome () {

        $books = Book::orderBy('updated_at', 'desc')->paginate(12);

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

    public function search(Request $request) {

        $keyword = $request->keyword;
        $keyword = '%' . $keyword . '%';

        // $books = DB::select('SELECT * FROM books WHERE keywords LIKE ?', [$keyword]);
        $books = Book::where('keywords', 'LIKE', $keyword)->orderBy('updated_at', 'desc')->paginate(12);
        if ($books->total()) {

            return view('book.searchResults', [
                'books' => $books,
            ]);
        } else {

            return view('book.searchNoFound');
        }
    }
}
