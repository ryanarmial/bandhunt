<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('votes', function (Blueprint $table) {
        $table->increments('id');
        $table->text('session');
        $table->integer('song_id')->unsigned();
        $table->foreign('song_id')->references('id')->on('songs');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('votes');
    }
}
