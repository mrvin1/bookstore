<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class editCartController extends Controller
{
    public function editcartView($idx){
        $book = Book::find($idx);
        $cart = Cart::where('bookId',$idx)->value('qty');
        return view('editCart',['book'=>$book, 'cart'=>$cart]);
    }
    public function updateCart($idx, Request $request){
        $newCart = $request->validate([
            'qty' => 'required|min:1'
        ]);
        $cart = DB::table('cart')->where('bookId', $idx)->update(['qty'=>$newCart['qty']]);
  
        return redirect('viewcart');
    }
}
