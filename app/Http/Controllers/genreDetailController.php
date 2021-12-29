<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class genreDetailController extends Controller
{
    public function genreDetailView($idx){
        $genre = Genre::find($idx);
        $book = Book::with('genre')->get();
        return view('genreDetail', ['genre'=>$genre, 'book'=>$book]);
    }

    public function genreUpdate($idx, Request $request){
        $genre = Genre::find($idx);
        $genreNew = Validator::make($request->all(),[
            'name' => 'required|unique:genre'
        ])->validate();
        $genre->name= $genreNew['name'];
        $genre->timestamps=false;
        $genre->save();
        return redirect()->back(); 
    } 
}
