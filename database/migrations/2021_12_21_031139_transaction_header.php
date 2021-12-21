<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactionHeader', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('TransactionDate');
            $table->UnsignedBigInteger('cartId');
            $table->foreign('cartId')->references('id')->on('cart');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactionHeader');
    }
}
