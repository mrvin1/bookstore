<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function viewRegister(){
        return view('register');
    }
    public function register(Request $request){
        $account = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required|min:8|required_with:password_confirmation|same:password_confirmation'
        ]);
        $account['password'] = bcrypt($account['password']);
        User::create($account);
        
        return redirect('/login');
    }
   
}
