<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable{

  protected $fillable = ['name', 'username', 'email', 'position', 'password'];

  protected $hidden = [ 'password', 'remember_token'];

}
