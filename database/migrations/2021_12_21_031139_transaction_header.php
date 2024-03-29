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
            $table->String('id',255)->primary();
            $table->String('email',255);
            $table->foreign('email')->references('email')->on('users');
            $table->dateTime('date', $precision = 0);
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
