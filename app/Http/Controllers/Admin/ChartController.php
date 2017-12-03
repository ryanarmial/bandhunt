<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller{

  public function index(Request $request, $id = null){

    if(is_numeric($id)){
      
      $idquery = 'AND shares.song_id = '.$id;
      $idquery2 = 'AND votes.song_id = '.$id;
      $band = DB::table('songs')
              ->select('songs.judul', 'bands.band_name','songs.id')
              ->join('bands', 'bands.id', '=', 'songs.band_id')
              ->where('songs.id', '=', $id)
              ->first();
      $databand = $band->band_name;
      $songid = $band->id;

    }elseif(!is_numeric($id)){

      $idquery = '';
      $idquery2 = '';
      $databand = 'SEMUA BAND';
      $songid = 0;

    }

    $songs = DB::table('songs')
            ->join('bands', 'bands.id', '=', 'songs.band_id')
            ->select('songs.*', 'bands.*','songs.id')
            ->orderBy('bands.band_name', 'asc')
            ->where('songs.final', 1)
            ->get();

    $points = DB::select('select date(votes.created_at) as tanggal, count(*) as total_votes, (select count(*) * 3 from shares where date(shares.created_at) = tanggal '.$idquery.') as total_shares from votes where date(created_at) >= "2017-10-21" '.$idquery2.' group by date(votes.created_at)');

    $arrtanggal = array();
    $arrpoint = array();
    foreach ($points as $point) {
      array_push($arrtanggal, '"'.date('d-M-Y', strtotime( $point->tanggal )).'"');
      array_push($arrpoint, $point->total_votes + $point->total_shares);
    }

    $objPoint = (object) array('tanggal' => '['.join(',', $arrtanggal).']', 'point' => $arrpoint);

    // print_r($objPoint->tanggal);
    return view('admin/chart', [
      'page'       => 'chart',
      'databand'   => $databand,
      'songs'      => $songs,
      'songid'     => $songid,
      'chartpoint' => $objPoint
    ]);

  }

}
