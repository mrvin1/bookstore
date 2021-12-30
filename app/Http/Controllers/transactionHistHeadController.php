<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionHeader;
use Illuminate\Support\Facades\Auth;

class transactionHistHeadController extends Controller
{
    public function headView(){
        $user = Auth::user();
        $head = TransactionHeader::where('email',$user->email)->get();
        return view('TransactionHistory', ['head'=>$head]);
    }
}
