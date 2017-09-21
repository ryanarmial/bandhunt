<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('members', function (Blueprint $table) {
        $table->increments('id');
        $table->string('member_name');
        $table->date('dob');
        $table->string('gender');
        $table->string('instrument');
        $table->string('uk_celana');
        $table->string('uk_baju');
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
      Schema::dropIfExists('members');
    }
}
