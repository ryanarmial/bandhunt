<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaguTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('songs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('judul');
        $table->text('link');
        $table->text('lirik');
        $table->integer('band_id')->unsigned();
        $table->foreign('band_id')->references('id')->on('bands');
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
      Schema::dropIfExists('songs');
    }
}
