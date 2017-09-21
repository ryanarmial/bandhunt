<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model{

  protected $fillable = ['band_id', 'judul', 'link', 'lirik'];

  public function band(){
    return $this->belongsTo(Band::class);
  }

}
