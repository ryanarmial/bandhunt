<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model{

  protected $fillable = ['band_id', 'member_name', 'email', 'phone', 'dob', 'gender', 'instrument', 'uk_celana', 'uk_baju'];

  public function band(){
    return $this->belongsTo(Band::class);
  }
}
