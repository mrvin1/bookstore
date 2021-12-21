<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Book extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name',255);
            $table->longText('synopsis');
            $table->String('cover', 255);
            $table->double('price',20);
            $table->UnsignedBigInteger('genreId');
            $table->foreign('genreId')->references('id')->on('genre');
            $table->String('author', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
