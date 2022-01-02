<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function addCart($idx,Request $request){
        $data = Auth::user();
        $book = Book::find($idx);
        $cart = $request->validate([
            'amount' => 'required|min:1'
        ]);
        Cart::insert([
            'clientEmail' => $data->email,
            'bookId' => $book->id,
            'qty' =>$cart['amount']
        ]);
        return redirect()->back(); 
    }
}
