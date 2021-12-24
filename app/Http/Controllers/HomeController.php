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
}
