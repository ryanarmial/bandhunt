<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Band;
use App\Vote;
use App\Song;

class VoteController extends Controller{

  public function index(Request $request){
    $value = $request->session()->all();
    // $bands = Band::orderBy('created_at', 'desc')->take(12)->get();

    $songs = DB::table('songs')
            ->select(DB::raw('songs.id, bands.band_name, songs.judul, bands.foto, songs.link, (Select count(*) FROM votes where votes.song_id = songs.id) as total_votes'))
            ->join('bands', 'bands.id', '=', 'songs.band_id')
            ->where('songs.final', '1')
            ->inRandomOrder()
            // ->orderBy('songs.created_at', 'desc')
            ->take(36)
            ->get();

    // return $value;

    // return redirect()->to('/submission');
    return view('vote', ['page' => 'vote', 'songs' => $songs]);
  }

  public function save(Request $request){
    $value = $request->session()->get('_token');
    $id = $request->get('id');

    $cekVote = Vote::where('song_id', $id)->where('session', $value)->count();

    if(!$cekVote){
      $vote = new Vote([
        'session' => $value
      ]);

      $song = Song::find($id);

      $songsave = $song->votes()->save($vote);
      return $songsave->id;
    }else{
      return  0;
    }

  }

  public function sort(Request $request, $type){

    if($type == 'atoz'){
      $column = 'bands.band_name';
      $order = 'asc';
    }elseif ($type == 'ztoa') {
      $column = 'bands.band_name';
      $order = 'desc';
    }elseif ($type == 'highscore') {
      $column = 'total_votes';
      $order = 'asc';
    }elseif ($type == 'lowscore') {
      $column = 'total_votes';
      $order = 'desc';
    }

    $songs = DB::table('songs')
            ->select(DB::raw('songs.id, bands.band_name, songs.judul, bands.foto, songs.link, (Select count(*) FROM votes where votes.song_id = songs.id) as total_votes'))
            ->join('bands', 'bands.id', '=', 'songs.band_id')
            ->where('songs.final', '1')
            // ->inRandomOrder()
            ->orderBy($column, $order)
            ->take(36)
            ->get();

    return response()->json(['songs' => $songs]);

  }

}
