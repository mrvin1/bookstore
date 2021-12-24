<?php

namespace App\Http\Controllers;
use App\Models\Book;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome(){
        $book = Book::paginate(5);
        return view('home', ['book'=>$book]);
    }
    public function searchBook(Request $request){
        $query = $request->search;
        $book = Book::where('name','LIKE',"%$query%")->paginate(5);
        return view('home',['book'=>$book]);
    }
    public function clearSearch(Request $request)
    {
        $query = $request->clear;
        $book = Book::paginate(5);
        return view('home', ['book'=>$book]);
    }
}
