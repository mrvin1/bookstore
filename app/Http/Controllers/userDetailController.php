<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class userDetailController extends Controller
{
    public function userDetailView($idx){
        $user=User::find($idx); 
        return view('UserDetail', ["user"=>$user]);
    }
    public function userEdit(Request $request){
        $emailNow = $request['emailnow'];
        $newUser = Validator::make($request->all(),[
            'role' => 'required',
            'name' => 'required',
            'email' => 'required|email:dns'
        ])->validate();
        Validator::make($newUser, [
            'role' => [
                'required',
                Rule::in(['admin', 'member', 'Admin', 'Member']),
            ],
        ]); 
        $user = DB::table('users')->where('email', $emailNow)->update(['role'=>$newUser['role'],'name'=>$newUser['name'],'email'=>$newUser['email']]);
        return redirect()->back();
    }
}
