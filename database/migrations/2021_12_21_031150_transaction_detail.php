<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactionDetail', function (Blueprint $table) {
            $table->UnsignedBigInteger('transactionId');
            $table->foreign('transactionId')->references('id')->on('transactionHeader');
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
        Schema::dropIfExists('transactionDetail');
    }
}
