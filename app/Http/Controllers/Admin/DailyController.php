<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Share;
use App\Vote;

class DailyController extends Controller{

  public function index(Request $request, $id = null){

    if(!$id){
      $id = date('Y-m-d');
    }
    $shares = Share::select(DB::raw("hour(created_at) as jam"), DB::raw("COUNT(*) * 3 as total"))
                ->whereDate('created_at', $id)
                ->groupBy(DB::raw('hour(created_at)'))
                ->get();

    $votes = Vote::select(DB::raw("hour(created_at) as jam"), DB::raw("COUNT(*) as total"))
                ->whereDate('created_at', $id)
                ->groupBy(DB::raw('hour(created_at)'))
                ->get();
    $tanggal = $id;

    $dates = Share::select(DB::raw("DATE(created_at) as tanggal"))
              ->groupBy('tanggal')
              ->get();

    $arrShareHour = array();
    $arrSharePoint = array();
    foreach ($shares as $share) {
      array_push($arrShareHour, '"'.$share->jam.':00"');
      array_push($arrSharePoint, $share->total);
    }
    $objShare = (object) array('jam' => '['.join(',', $arrShareHour).']', 'point' => $arrSharePoint);

    $arrVoteHour = array();
    $arrVotePoint = array();
    foreach ($votes as $vote) {
      array_push($arrVoteHour, '"'.$vote->jam.':00"');
      array_push($arrVotePoint, $vote->total);
    }
    $objVote = (object) array('jam' => '['.join(',', $arrVoteHour).']', 'point' => $arrVotePoint);

    return view('admin/daily', [
      'page'       => 'daily',
      'tanggal'    => $tanggal,
      'dates'      => $dates,
      'votepoint'  => $objVote,
      'sharepoint' => $objShare
    ]);
  }

}
