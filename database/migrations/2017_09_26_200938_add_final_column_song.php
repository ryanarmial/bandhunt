<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFinalColumnSong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
      Schema::table('songs', function (Blueprint $table) {
        $table->boolean('final');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
      Schema::table('songs', function (Blueprint $table) {
          $table->dropColumn(['final']);
      });
    }
}
