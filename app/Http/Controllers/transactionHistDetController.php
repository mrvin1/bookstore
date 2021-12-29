<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionDetail;

class transactionHistDetController extends Controller
{
    public function detailView($uid){
        $det = TransactionDetail::join('book','bookId','=', 'book.id')->where('transactionId', $uid)->get();
        $grandtotal=0;
        for($idx = 0; $idx<sizeof($det);$idx++)
        {
            $grandtotal += $det[$idx]->qty * $det[$idx]->price;
        }
        return view('TransactionHistDetail', ['det'=>$det, 'gt'=>$grandtotal]);
    }
}
