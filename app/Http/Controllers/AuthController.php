<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function viewLogin(){
        return view('login');
    }
    public function login(Request $query) {
        $credential =[
            'email' => $query->email,
            'password'=> $query->password
        ];
        //cookie
        if($query->remember){
            Cookie::queue('mycookie', $query->email, 5);
        }

        //validasi kalo bisa login
        if(Auth::attempt($credential, true)){
            //session
            session()->put('mysession', $credential);

            return redirect()->back();
        }

        return redirect()->back();
    }

    public function logout() {
        Auth::logout();

        //hapus session
        session()->forget('mysession');

        return redirect()->back();
    }

    public function adminPage() {
        return view('admin');
    }
}
