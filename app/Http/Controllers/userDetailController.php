<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Illuminate\Http\Request;

class userDetailController extends Controller
{
    public function userDetailView($idx){
        $user=User::find($idx); 
        return view('UserDetail', ["user"=>$user]);
    }
    public function userEdit(Request $request){
        $newUser = Validator::make($request->all(),[
            'role' => 'required',
            'name' => 'required',
            'email' => 'required|email:dns'
        ])->validate();
       
        Validator::make($newUser, [
            'role' => [
                'required',
                Rule::in(['admin', 'member']),
            ],
        ]); 
        $user = DB::table('users')->where('email', $newUser['email'])->update(['role'=>$newUser['role'],'name'=>$newUser['name'],'email'=>$newUser['email']]);
        return redirect()->back();
    }
}
