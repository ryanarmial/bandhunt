<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
      Schema::create('admins', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('username')->unique()->nullable();
        $table->string('email')->unique()->nullable();
        $table->string('password');
        $table->string('position');
        $table->rememberToken();
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
      Schema::dropIfExists('admins');
    }
}
