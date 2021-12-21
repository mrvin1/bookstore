<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookDetail extends Model
{
    use HasFactory;
    protected $table= "bookDetail";
    protected $guarded = [];

    public function book(){
        return $this->hasOne(Book::class);
    }
    public function genre(){
        return $this->hasMany(Genre::class);
    }
}