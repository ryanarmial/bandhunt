<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Song;

class SongController extends Controller{

  public function index(){
    $songs = DB::table('songs')
            ->join('bands', 'bands.id', '=', 'songs.band_id')
            ->select('songs.*', 'bands.*','songs.id')
            ->orderBy('songs.created_at', 'desc')
            ->get();

    // echo "<pre>";
    // print_r($songs);
    // die();
    return view('admin/song', [
      'page'  => 'songs',
      'songs' => $songs
    ]);
  }

  public function updateScore(Request $request, $id){
    $song = Song::find($id);
    $song->score = $request->get('score');

    $song->save();
    return $song;
  }

  public function updateStatus(Request $request, $id){
    $song = Song::find($id);
    $song->status = $request->get('status');

    $song->save();
    return $song;
  }

  public function deleteSong(){

    Song::destroy([1, 2, 3, 4, 5]);

  }

}
