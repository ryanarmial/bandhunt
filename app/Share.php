<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model{
  protected $fillable = ['song_id', 'session', 'ip', 'platform'];

  public function band(){
    return $this->belongsTo(Song::class);
  }
}
