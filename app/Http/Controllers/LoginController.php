<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if(Auth::attempt($credential)&&Auth::user()->role =='member'){
            $request->session()->regenerate();
            return redirect()->intended('/layoutmember');
        }
        else if(Auth::attempt($credential)&&Auth::user()->role =='admin'){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        if($request->remember){
            Cookie::queue('mycookie', $request->email, 7);
        }
        return redirect()->back();  
    }



}
