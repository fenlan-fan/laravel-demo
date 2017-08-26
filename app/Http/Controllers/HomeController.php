<?php

namespace App\Http\Controllers;

use App\Book;
use App\Cart;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function cart(Request $request)
    {
        if ($request->isMethod('POST')) {

            $amounts = $request->input('amount');
            $keys = array_keys($request->input('amount'));
            foreach ($keys as $key) {

                $cart = Cart::find($key);
                $cart->amount = $amounts[$key];
                $cart->save();
            }
        }
        $total = 0;
        $carts = DB::select('SELECT * FROM carts WHERE userID = ?', [Auth::user()->id]);

        return view('user.cart', [
            'carts' => $carts,
            'total' => $total,
        ]);
    }

    public function delete($id)
    {
        $cart = Cart::find($id);

        if ($cart->delete()) {

            return redirect('/cart');
        } else {

            return '删除失败';
        }
    }
}
