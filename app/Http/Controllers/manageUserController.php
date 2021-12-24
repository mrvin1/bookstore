<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class manageUserController extends Controller
{
    public function viewUserController(){
        $users=User::all();
        return view('manageUser',['user'=>$users]);
    }
    public function deleteUser(Request $request){
        $reqDel=$request['delete'];
        $userDel=User::find($reqDel);
        $userDel->delete();
        return redirect()->back();
    }
}
