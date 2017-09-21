<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model{

  protected $fillable = ['user_id', 'band_name', 'foto', 'cerita', 'kota', 'genre', 'info_bh'];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function members(){
    return $this->hasMany(Member::class);
  }

  public function songs(){
    return $this->hasMany(Song::class);
  }

}
