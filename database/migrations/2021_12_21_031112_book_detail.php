<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookDetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('bookId');
            $table->foreign('bookId')->references('id')->on('book');
            $table->UnsignedBigInteger('genreId');
            $table->foreign('genreId')->references('id')->on('genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookDetail');
    }
}
