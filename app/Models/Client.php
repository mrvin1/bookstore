<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table= "client";
    protected $guarded = [];

    public function role(){
        return $this->hasOne(Role::class);
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }
}
