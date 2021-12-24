<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profileView(){
        $data = Auth::user();
        return view('profile',['user'=>$data]);
    }
    public function changeName(Request $request){
        $data = Auth::user();
        $input = $request->validate([
            'name' => 'required'
        ]);
        $user = DB::table('users')->where('email', $data->email)->update(['name'=>$input['name']]);
        return redirect()->back(); 
    }
    
}
