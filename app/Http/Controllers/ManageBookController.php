<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ManageBookController extends Controller
{
    public function viewBook(){
        return view('manageBook');
    }
    public function insertBook(Request $request){
        $newBook = $request->validate([
            'name' => 'required',
            'author' => 'required',
            'synopsis' => 'required',
            'genre' => 'required|exists:Genre,name',
            'cover' => 'required|mimes:jpeg,jpg,png,img',
            'price'=> 'required|numeric'
        ]);
        Book::create($newBook);
    }
}
