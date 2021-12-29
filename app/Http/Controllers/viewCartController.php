<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Book;

use Illuminate\Http\Request;

class viewCartController extends Controller
{

    public function viewCart(){
        $cart = Cart::join('book','bookId','=', 'book.id')->get();
        $grandtotal=0;
        for($idx = 0; $idx<sizeof($cart);$idx++)
        {
            $grandtotal += $cart[$idx]->qty * $cart[$idx]->price;
        }
        
        return view('viewCart',['cart'=>$cart, 'gt'=>$grandtotal]);
    }
    public function deleteCart(Request $request){
        $cartdel = Cart::where('bookId',$request['del'])->delete();;
        return redirect()->back();
    }
    public function checkout(Request $request){
        $cart = Cart::join('book','bookId','=', 'book.id')->get();
        $grandtotal=0;
        for($idx = 0; $idx<sizeof($cart);$idx++)
        {
            $grandtotal += $cart[$idx]->qty * $cart[$idx]->price;
        }
    }

}
