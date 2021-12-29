<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Book;

use Illuminate\Http\Request;

class viewCartController extends Controller
{
    public function viewCart(){
        $cart = Cart::join('book','bookId','=', 'book.id')->get();
        
        return view('viewCart',['cart'=>$cart]);
    }
}
