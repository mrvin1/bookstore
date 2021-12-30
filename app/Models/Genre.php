<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table= "Genre";
    protected $guarded = [];
    
    public function book(){
         return $this->belongsToMany(Book::class,'bookdetail','genreId','bookId'); 
    }
    public function bookDetail(){
        return $this->hasMany(bookDetail::class);
    }
}
