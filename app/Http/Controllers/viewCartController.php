<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Book;
use App\Models\TransactionHeader;
use App\Models\TransactionDetail;
use Illuminate\Support\Str;
use  Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class viewCartController extends Controller
{
    public function viewCart(){
        $user = Auth::user();
        $cart = Cart::join('book','bookId','=', 'book.id')->where('clientEmail',$user->email)->get();
        $grandtotal=0;
        for($idx = 0; $idx<sizeof($cart);$idx++)
        {
            $grandtotal += $cart[$idx]->qty * $cart[$idx]->price;
        }
        
        return view('viewCart',['cart'=>$cart, 'gt'=>$grandtotal]);
    }
    public function deleteCart(Request $request){
        $cartdel = Cart::where('id',$request->del+1)->delete();;
        return redirect()->back();
    }
    public function checkout(Request $request){
        $user = Auth::user();
        $cart = Cart::join('book','bookId','=', 'book.id')->where('clientEmail',$user->email)->get();
        $grandtotal=0;
        for($idx = 0; $idx<sizeof($cart);$idx++)
        {
            $grandtotal += $cart[$idx]->qty * $cart[$idx]->price;
        }
        $uuidGenerator = Str::orderedUuid();
        $datetime = Carbon::now('Asia/Jakarta');
        $transactionHeader = new TransactionHeader;
        $transactionHeader->id = $uuidGenerator;
        $transactionHeader->email = $user->email;
        $transactionHeader->date = $datetime;
        $transactionHeader->timestamps=false;
        $transactionHeader->save();
        $cartt = Cart::all();     
        for($idx = 0; $idx<=sizeof($cart);$idx++)
        {    
            if(isset($cartt[$idx])){
                $transactionDetail = new TransactionDetail;
                $transactionDetail->transactionId = $uuidGenerator;
                $transactionDetail->bookId = $cartt[$idx]->bookId ;
                $transactionDetail->qty = $cartt[$idx]->qty ;
                $transactionDetail->timestamps=false;
                $transactionDetail->save();
            }          
        }
        //empty cart
        Cart::truncate();
        return redirect()->home();
    }

}
