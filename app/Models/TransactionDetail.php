<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table= "transactionDetail";
    protected $guarded = [];

    public function transactionHeader(){
        return $this->hasOne(transactionHeader::class);
    }
    public function Book(){
        return $this->hasOne(Book::class);
    }
}
