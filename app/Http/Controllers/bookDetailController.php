<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Genre;
use App\Models\BookDetail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class bookDetailController extends Controller
{
    public function bookDetailView($idx){
        $book = Book::find($idx);
        $genre = genre::all();
        return view('BookDetails', ['genre'=>$genre, 'book'=>$book]);
    }
    public function updateBook($idx, Request $request){
        $book = Book::find($idx);
        Validator::make($request->all(),[
            'name' => 'required',
            'author' => 'required',
            'synopsis' => 'required',
            'genre' => 'required|exists:Genre,id',
            'cover' => 'image',
            'price'=> 'required|numeric'
        ])->validate();
        $book->name = $request->name;
        $book->author = $request->author;
        $book->synopsis = $request->synopsis;
        $book->price = $request->price;
        $book->timestamps=false;

        $image = $request->file('cover');

        if($image != null)
        {
            $CoverName = time() . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image,$CoverName);
            Storage::delete('/public',$book->cover);
            $book->cover = $CoverName;
        }
        else{
            $request->cover = $book->cover;
        }
        $book->save();
        
        //bookdetailgenre delete
        $del = BookDetail::where('bookId',$idx);
        $del->delete();

        //bookdetailgenre insert 
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
