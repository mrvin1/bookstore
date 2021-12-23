<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre as genre;
use App\Models\bookDetail;
use Illuminate\Support\Facades\Validator;

class ManageBookController extends Controller
{
    public function viewBook(){
        $genre = genre::all();
        $book = Book::all();
        $bookDetail = bookDetail::all();
        return view('manageBook', ['genre'=>$genre, 'bookdetail'=>$bookDetail, 'book'=>$book]);
    }
    public function insertBook(Request $request){
        $newBook = Validator::make($request->all(),[
            'name' => 'required',
            'author' => 'required',
            'synopsis' => 'required',
            'genre' => 'required|exists:Genre,id',
            'cover' => 'required',
            'price'=> 'required|numeric'
        ])->validate();

        Book::insert([
            'name' =>$request->input('name'),
            'author' =>$request->input('author'),
            'synopsis' =>$request->input('synopsis'),
            'cover' =>$request->input('cover'),
            'price' =>$request->input('price'),
        ]);

        for($i = 0; $i<sizeof($request->input('genre')); $i++) 
        (
            bookDetail::insert([
                'bookid'=>Book::where('name','=',$request->name)->value('id'),
                'genreid'=>$request->input('genre')[$i]
            ])
            
        );

            
   

        return redirect()->back(); 
    }
}
