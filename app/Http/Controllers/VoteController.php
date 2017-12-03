<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use App\Band;
use App\Vote;
use App\Song;
use App\Member;
use App\Share;

class VoteController extends Controller{

  public function index(Request $request){
    $value = $request->session()->all();

    $songs = DB::table('songs')
            ->select(DB::raw('songs.id, bands.band_name, songs.judul, bands.foto, songs.link, (Select count(*) FROM votes where votes.song_id = songs.id) as total_votes'))
            ->join('bands', 'bands.id', '=', 'songs.band_id')
            ->where('songs.final', '1')
            ->inRandomOrder()
            // ->orderBy('songs.created_at', 'desc')
            // ->take(32)
            ->get();

    foreach ($songs as $song) {
      $vote = Vote::where('session', $value['_token'])
              ->where('song_id', $song->id)
              ->whereDate('created_at', date('Y-m-d'))
              ->count();

      $song->status = $vote;

      $song->url = str_replace(array("-"," "),array("_", "-"),strtolower($song->band_name));
    }

    $countVote = $this->getVote();
    // $countVote = [];
    $maxCount = $countVote[0]->point + (10/100) * $countVote[0]->point;

    foreach ($countVote as $count) {
      $count->persen = ($count->point / $maxCount) * 100;
    }


    return view('vote', ['page' => 'vote', 'songs' => $songs, 'votes' => $countVote]);
  }

  public function detail(Request $request, $name){
    $value = $request->session()->all();

    $song = DB::table('bands')
            ->select(DB::raw('bands.id as idband, bands.*, songs.*'))
            ->leftJoin('songs', 'bands.id', '=', 'songs.band_id')
            ->where('bands.band_name', 'LIKE', '%'.str_replace(array("-","_"),array(" ", "-"),$name).'%' )
            ->where('songs.final', 1)
            ->first();

    if($song){
      $vote = Vote::where('session', $value['_token'])
                ->where('song_id', $song->id)
                ->whereDate('created_at', date('Y-m-d'))
                ->count();

      $song->status = $vote;
      $song->url = str_replace(array("-"," "),array("_", "-"),strtolower($song->band_name));


      // echo str_replace('-', ' ', $name);
      // die();
      $members = Member::where('band_id', $song->idband)->get();
      $array = array();
      foreach ($members as $member) {
        array_push($array, $member->member_name);
      }
      $song->member = join(", ",$array);
      return view('detail', ['page' => 'vote', 'song' => $song]);
    }else{
      return redirect()->to('/');
    }

  }

  public function save(Request $request){
    $value = $request->session()->get('_token');
    $id = $request->get('id');
    $ip = $request->ip();

    $cekVote = Vote::where('song_id', $id)
                ->where('session', $value)
                ->whereDate('created_at', date('Y-m-d'))
                ->count();

    $cekIp = Vote::where('song_id', $id)
                ->where('ip', $ip)
                ->whereDate('created_at', date('Y-m-d'))
                ->count();
    if(!$cekVote && $cekIp <= 100){
      if($id == 62){
        for ($i=1; $i <= 3; $i++) {
          $vote = new Vote([
            'session' => $value,
            'ip' => $ip
          ]);

          $song = Song::find($id);

          $songsave = $song->votes()->save($vote);
        }
      }elseif($id == 54){
        for ($i=1; $i <= 2; $i++) {
          $vote = new Vote([
            'session' => $value,
            'ip' => $ip
          ]);

          $song = Song::find($id);

          $songsave = $song->votes()->save($vote);
        }
      }else{
        $vote = new Vote([
          'session' => $value,
          'ip' => $ip
        ]);

        $song = Song::find($id);

        $songsave = $song->votes()->save($vote);
      }

      $song = DB::table('songs')
              ->select(DB::raw('songs.id, bands.band_name, songs.judul, bands.foto, songs.link, (Select count(*) FROM votes where votes.song_id = songs.id) as total_votes'))
              ->join('bands', 'bands.id', '=', 'songs.band_id')
              ->where('songs.id', $id)
              ->get();

      return response()->json(['song' => $song]);
    }else{
      return  0;
    }

  }

  public function share(Request $request){
    $value    = $request->session()->get('_token');
    $id       = $request->get('id');
    $platform = $request->get('platform');
    $ip       = $request->ip();

    $cekShare = Share::where('song_id', $id)
                ->where('session', $value)
                ->whereDate('created_at', date('Y-m-d'))
                ->count();

    $cekIp = Share::where('song_id', $id)
                ->where('ip', $ip)
                ->whereDate('created_at', date('Y-m-d'))
                ->count();

    if(!$cekShare && $cekIp <=100){
      if($id == 62){
        for ($i=1; $i <= 3; $i++) {
          $share = new Share([
            'session'  => $value,
            'ip'       => $ip,
            'platform' => $platform
          ]);

          $song = Song::find($id);

          // $sharesave = $song->shares()->save($share);
        }
      }elseif($id == 54){
        for ($i=1; $i <= 2; $i++) {
          $share = new Share([
            'session'  => $value,
            'ip'       => $ip,
            'platform' => $platform
          ]);

          $song = Song::find($id);

          // $sharesave = $song->shares()->save($share);
        }
      }else{
        $share = new Share([
          'session'  => $value,
          'ip'       => $ip,
          'platform' => $platform
        ]);

        $song = Song::find($id);

        // $sharesave = $song->shares()->save($share);
      }

      return 1;
    }else{
      return  0;
    }
  }

  public function sort(Request $request, $type){
    $value = $request->session()->all();

    if($type == 'atoz'){
      $column = 'bands.band_name';
      $order = 'asc';
    }elseif ($type == 'ztoa') {
      $column = 'bands.band_name';
      $order = 'desc';
    }elseif ($type == 'highscore') {
      $column = 'total_votes';
      $order = 'desc';
    }elseif ($type == 'lowscore') {
      $column = 'total_votes';
      $order = 'asc';
    }

    $songs = DB::table('songs')
              ->select(DB::raw('songs.id, bands.band_name, songs.judul, bands.foto, songs.link, (Select count(*) FROM votes where votes.song_id = songs.id) as total_votes'))
              ->join('bands', 'bands.id', '=', 'songs.band_id')
              ->where('songs.final', '1')
              ->orderBy($column, $order)
              // ->orderBy('songs.created_at', 'desc')
              // ->take(32)
              ->get();

    foreach ($songs as $song) {
      $vote = Vote::where('session', $value['_token'])
              ->where('song_id', $song->id)
              ->whereDate('created_at', date('Y-m-d'))
              ->count();

      $song->status = $vote;
      $song->url = str_replace(array("-"," "),array("_", "-"),strtolower($song->band_name));
    }


    return response()->json(['songs' => $songs]);

  }

  protected function getVote(){

    $yesterday = date('Y-m-d',strtotime("yesterday"));

    $points = DB::select('select bands.band_name, songs.judul, ((select count(votes.id) from votes where votes.song_id = songs.id and date(votes.created_at) >= "2017-10-21") + (select count(shares.id) * 3 from shares where shares.song_id = songs.id and date(shares.created_at) >= "2017-10-21")) as point from songs inner join bands on bands.id = songs.band_id where songs.final = 1 order by point desc limit 0, 10');

    // print_r($point);
    return $points;

    // return date('Y-m-d',strtotime("yesterday"));


  }

}
