<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists',function (Blueprint $table){
            $table->string('bandcamp')->nullable('true')->change();
            $table->text('biography')->nullable('true')->change();
            $table->string('instagram')->nullable('true')->change();
            $table->string('facebook')->nullable('true')->change();
            $table->string('youtube')->nullable('true')->change();
            $table->string('siteweb')->nullable('true')->change();
            $table->string('logo')->nullable('true')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artists',function (Blueprint $table){
            $table->string('bandcamp')->nullable('false')->change();
            $table->text('biography')->nullable('false')->change();
            $table->string('instagram')->nullable('false')->change();
            $table->string('youtube')->nullable('false')->change();
            $table->string('siteweb')->nullable('false')->change();
            $table->string('logo')->nullable('false')->change();
        });
    }
}
