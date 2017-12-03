<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Share;

class ShareController extends Controller{
  public function index(Request $request, $id = null){

    if($id){
      $shares = Share::select('platform', DB::raw("COUNT(*) as total"))
                  ->whereDate('created_at', $id)
                  ->groupBy('platform')
                  ->get();
      $tanggal = $id;
    }else{
      $shares = Share::select('platform', DB::raw("COUNT(*) as total"))
                  ->groupBy('platform')
                  ->get();
      $tanggal = 'Semua Tanggal';
    }

    $dates = Share::select(DB::raw("DATE(created_at) as tanggal"))
              ->groupBy('tanggal')
              ->get();

    $arrplatform = array();
    $arrpoint = array();
    foreach ($shares as $share) {
      array_push($arrplatform, '"'.$share->platform.'"');
      array_push($arrpoint, $share->total * 3);
    }
    $objPoint = (object) array('platform' => '['.join(',', $arrplatform).']', 'point' => $arrpoint);

    return view('admin/share', [
      'page'       => 'share',
      'tanggal'    => $tanggal,
      'dates'      => $dates,
      'sharepoint' => $objPoint
    ]);
  }
}
