<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKotaToBand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
      Schema::table('bands', function (Blueprint $table) {
        $table->string('kota')->after('info_bh');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('bands', function (Blueprint $table) {
          $table->dropColumn(['kota']);
      });
    }
}
