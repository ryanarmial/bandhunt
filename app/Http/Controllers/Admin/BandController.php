<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Band;
use App\Member;
use App\Song;

class BandController extends Controller{
  public function index(){

    $bands = Band::orderBy('created_at', 'desc')->get();

    return view('admin/band', [
      'page'  => 'bands',
      'bands' => $bands
    ]);

  }
  public function detail($id){
    $count = Band::where('id', $id)->count();

    if($count){

      $band = Band::findOrFail($id);

      $members = $band->members()->get();

      $songs = $band->songs()->get();

      return view('admin/detailband', [
        'page'    => 'bands',
        'band'    => $band,
        'members' => $members,
        'songs'   => $songs
      ]);

    }else{
      // redirect( [$to, $status, $headers, $secure])
      return redirect()->to('/levis-tools/bands');
    }
  }
  public function delete($id){
    DB::table('songs')->where('band_id', $id)->delete();
    DB::table('members')->where('band_id', $id)->delete();
    Band::destroy($id);
    return redirect()->to('/levis-tools/bands');
  }
}
