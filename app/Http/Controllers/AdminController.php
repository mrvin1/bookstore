<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function viewAdmin(){
        return view('admin-layout');
    }
}
