<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneEmailToMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
      Schema::table('members', function (Blueprint $table) {
        $table->string('phone')->after('member_name');
        $table->string('email')->after('member_name');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('members', function (Blueprint $table) {
        $table->dropColumn(['email','phone']);
      });
    }
}
