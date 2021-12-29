<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionHeader;

class transactionHistHeadController extends Controller
{
    public function headView(){
        $head = TransactionHeader::all();
        return view('TransactionHistory', ['head'=>$head]);
    }
}
