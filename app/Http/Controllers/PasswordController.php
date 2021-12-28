<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function passwordView(){
        return view('ChangePassword');
    }
    public function changePassword(Request $request){
        $dataa = Auth::user();
        $new = $this->validate($request, [
            'old'     => 'required',
            'new'     => 'required|min:8|different:old',
            'confirm' => 'required|same:new',
        ]);
        $data = $request->all();
      
        $user = User::find(auth()->user()->id);
     
        if(!Hash::check($data['old'], $user->password)){
     
             return back()->with('error','You have entered wrong password');
     
        }else{
            $user = DB::table('users')->where('email', $dataa->email)->update(['password'=>bcrypt($new['new'])]);
            return redirect()->back(); 
        }


        
    }
}
