<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function viewLogin(){
        return view('login');
    }
    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password'=> 'required'
        ]);
        if($request->remember){
            Cookie::queue('cookie', $request->email, 7);
        }

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }


        return redirect()->back();  
    }



}
