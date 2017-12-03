<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIpToVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
      Schema::table('votes', function (Blueprint $table) {
        $table->text('ip')->after('session');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
      Schema::table('votes', function (Blueprint $table) {
          $table->dropColumn(['ip']);
      });
    }
}
