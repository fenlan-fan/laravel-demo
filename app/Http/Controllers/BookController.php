<?php

namespace App\Http\Controllers;

use App\Book;
use App\Cart;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function welcome () {

        $books = Book::orderBy('updated_at', 'desc')->paginate(12);

        return view('welcome', [
            'books' => $books,
        ]);
    }

    public function detail(Request $request, $id) {

        $book = Book::find($id);

        if ($request->isMethod('POST')) {

            $findID = DB::select('SELECT id FROM carts WHERE userID = ? AND bookID = ?', [Auth::user()->id, $id]);
            if ($findID) {
                $cart = Cart::find($findID[0]->id);
                $cart->amount = $cart->amount + 1;

                if ($cart->save()) {

                    return redirect('book/detail/' . $id)->with('success', '图书已放入购物车');
                } else {

                    return redirect('book/detail/' . $id)->with('error', '添加失败');
                }

            }
            else {

                $cart = new Cart();
                $cart->userID = Auth::user()->id;
                $cart->bookID = $id;
                $cart->amount = 1;

                if ($cart->save()) {

                    return redirect('book/detail/' . $id)->with('success', '图书已放入购物车');
                } else {

                    return redirect('book/detail/' . $id)->with('error', '添加失败');
                }
            }
        }

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
