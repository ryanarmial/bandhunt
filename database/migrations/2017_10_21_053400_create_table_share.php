<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableShare extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('shares', function (Blueprint $table) {
        $table->increments('id');
        $table->text('session');
        $table->text('ip');
        $table->text('platform');
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
      Schema::dropIfExists('shares');
    }
}
