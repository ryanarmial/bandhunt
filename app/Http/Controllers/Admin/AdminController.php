<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Vote;
use App\Share;
use App\Song;

// ;

class AdminController extends Controller{

  public function index(){

    $totalvote = Vote::whereDate('created_at', '>=', '2017-10-21')->count();
    $totalshare = Share::whereDate('created_at', '>=', '2017-10-21')->count() * 3;
    $totalpoint =  $totalvote + $totalshare ;

    $totalVoteToday = Vote::whereDate('created_at', '=', date('Y-m-d'))->count() + (Share::whereDate('created_at', '=', date('Y-m-d'))->count() * 3);

    $points = DB::select('select date(votes.created_at) as tanggal, count(*) as total_votes, (select count(*) * 3 from shares where date(shares.created_at) = tanggal) as total_shares from votes where date(created_at) >= "2017-10-21" group by date(votes.created_at)');

    $arrtanggal = array();
    $arrpoint = array();
    foreach ($points as $point) {
      array_push($arrtanggal, '"'.date('d-M-Y', strtotime( $point->tanggal )).'"');
      array_push($arrpoint, $point->total_votes + $point->total_shares);
    }

    $objPoint = (object) array('tanggal' => '['.join(',', $arrtanggal).']', 'point' => $arrpoint);
    // print_r($objPoint->tanggal);
    return view('admin/dashboard', [
      'page'        => 'dashboard',
      'totalPoints' => $totalpoint,
      'totalVotes'  => $totalvote,
      'totalShares' => $totalshare,
      'totalToday'  => $totalVoteToday,
      'chartpoint'  => $objPoint
    ]);

  }

  public function temp(){
    $arrvotes = array();
    for ($i=1; $i <= 275 ; $i++) {
      $tgl8 = [
        'session'    => 'rlQmBffOKrdzkTzFIwBBqzF2VONNP67S7eGJOlCr',
        'ip'         => '45.112.127.90',
        'song_id'    => 580,
        'created_at' => '2017-11-08 '.date('H:i:s'),
        'updated_at' => '2017-11-08 '.date('H:i:s')
      ];
      array_push($arrvotes, $tgl8);
    }
    for ($i=1; $i <= 269 ; $i++) {
      $tgl7 = [
        'session'    => 'rlQmBffOKrdzkTzFIwBBqzF2VONNP67S7eGJOlCr',
        'ip'         => '45.112.127.90',
        'song_id'    => 580,
        'created_at' => '2017-11-07 '.date('H:i:s'),
        'updated_at' => '2017-11-07 '.date('H:i:s')
      ];
      array_push($arrvotes, $tgl7);
    }
    for ($i=1; $i <= 289 ; $i++) {
      $tgl6 = [
        'session'    => 'rlQmBffOKrdzkTzFIwBBqzF2VONNP67S7eGJOlCr',
        'ip'         => '45.112.127.90',
        'song_id'    => 580,
        'created_at' => '2017-11-06 '.date('H:i:s'),
        'updated_at' => '2017-11-06 '.date('H:i:s')
      ];
      array_push($arrvotes, $tgl6);
    }
    for ($i=1; $i <= 241 ; $i++) {
      $tgl5 = [
        'session'    => 'rlQmBffOKrdzkTzFIwBBqzF2VONNP67S7eGJOlCr',
        'ip'         => '45.112.127.90',
        'song_id'    => 580,
        'created_at' => '2017-11-05 '.date('H:i:s'),
        'updated_at' => '2017-11-05 '.date('H:i:s')
      ];
      array_push($arrvotes, $tgl5);
    }
    for ($i=1; $i <= 221 ; $i++) {
      $tgl4 = [
        'session'    => 'rlQmBffOKrdzkTzFIwBBqzF2VONNP67S7eGJOlCr',
        'ip'         => '45.112.127.90',
        'song_id'    => 580,
        'created_at' => '2017-11-04 '.date('H:i:s'),
        'updated_at' => '2017-11-04 '.date('H:i:s')
      ];
      array_push($arrvotes, $tgl4);
    }
    DB::table('votes')->insert($arrvotes);
  }

}
