<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsConcerts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_concert', function (Blueprint $table){
            $table->integer('artist_id')->unsigned()->index();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
            $table->integer('concert_id')->unsigned()->index();
            $table->foreign('concert_id')->references('id')->on('concerts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists_concerts');
    }
}
