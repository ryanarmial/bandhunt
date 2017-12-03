<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Vote;

class LeaderboardController extends Controller{

  public function index(Request $request, $date = null){

    if($date){
      $queryvotes = 'and date(votes.created_at) = "'.$date.'"';
      $queryshares = 'and date(shares.created_at) = "'.$date.'"';
      $tanggal = $date;
    }else{
      $queryvotes = 'and date(votes.created_at) >= "2017-10-21"';
      $queryshares = 'and date(shares.created_at) >= "2017-10-21"';
      $tanggal = 'Semua Tanggal';
    }

    $points = DB::select('select bands.band_name, songs.judul, ((select count(votes.id) from votes where votes.song_id = songs.id '.$queryvotes.') + (select count(shares.id) * 3 from shares where shares.song_id = songs.id '.$queryshares.')) as point from songs inner join bands on bands.id = songs.band_id where songs.final = 1 order by point desc');

    // return $points;

    $dates = Vote::select(DB::raw("DATE(created_at) as tanggal"))
              ->whereDate('created_at', '>=', '2017-10-21')
              ->groupBy('tanggal')
              ->get();

    $arrband = array();
    $arrpoint = array();
    foreach ($points as $point) {
      array_push($arrband, '"'.$point->band_name.'"');
      array_push($arrpoint, $point->point);
    }

    $objPoint = (object) array('band' => '['.join(',', $arrband).']', 'point' => $arrpoint);

    return view('admin/leaderboard', [
      'page'    => 'leaderboard',
      'tanggal' => $tanggal,
      'dates'   => $dates,
      'point'   => $objPoint
    ]);
  }
}
