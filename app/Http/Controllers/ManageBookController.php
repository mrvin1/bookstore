<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Genre as genre;
use App\Models\bookDetail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ManageBookController extends Controller
{
    public function viewBook(){ 
        $genre = genre::all();
        $book = Book::all();
        return view('manageBook', ['genre'=>$genre, 'book'=>$book]);
    }
    public function insertBook(Request $request){
        $newBook = Validator::make($request->all(),[
            'name' => 'required',
            'author' => 'required',
            'synopsis' => 'required',
            'genre' => 'required|exists:Genre,id',
            'cover' => 'required|image',
            'price'=> 'required|numeric'
        ])->validate();
        $image =$newBook['cover'];
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        Book::insert([
            'name' =>$newBook['name'],
            'author' =>$newBook['author'],
            'synopsis' =>$newBook['synopsis'],
            'cover' =>$imageName,
            'price' =>$newBook['price'],
        ]);
        Storage::putFileAs('public', $image,$imageName);

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
