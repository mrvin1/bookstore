<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->bigInteger('qty');
            $table->double('totalPrice');
            $table->double('subTotal');
            $table->String('clientEmail');
            $table->foreign('clientEmail')->references('email')->on('users');
            $table->UnsignedBigInteger('bookId');
            $table->foreign('bookId')->references('id')->on('book');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
