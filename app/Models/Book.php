<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table= "book";
    protected $guarded = [];

    public function genre(){
        return $this->hasMany(Genre::class);
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }
    public function transactionDetail(){
        return $this->hasMany(transactionDetail::class);
    }

}
