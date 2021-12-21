<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;
    protected $table= "transactionHeader";
    protected $guarded = [];

    public function cart(){
        return $this->hasOne(Cart::class);
    }
    public function transactionDetail(){
        return $this->hasMany(transactionDetail::class);
    }
}
