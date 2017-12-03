<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model{

  protected $fillable = ['song_id', 'session', 'ip'];

  public function band(){
    return $this->belongsTo(Song::class);
  }
}
