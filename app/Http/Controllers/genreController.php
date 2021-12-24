<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class genreController extends Controller
{
    public function genreView(){
        $genre=Genre::all();
        return view('manageGenre',['genre'=>$genre]);
    }
    public function genreInsert(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|unique:genre',
        ]);
        Genre::create($input);
        return redirect()->back();
    }
    public function deleteGenre(Request $request)
    {
        
    }
}
