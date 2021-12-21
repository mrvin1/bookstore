<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table= "cart";
    protected $guarded = [];

    public function client(){
        return $this->hasOne(Client::class);
    }
    public function book(){
        return $this->hasMany(Book::class);
    }
    public function transactionHeader(){
        return $this->hasMany(transactionHeader::class);
    }
    
}
