<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Band;
use App\Member;
use App\Song;

class TopController extends Controller{

  public function index(Request $request){
    $songs = DB::table('songs')
            ->join('bands', 'bands.id', '=', 'songs.band_id')
            ->select('songs.*', 'bands.*','songs.id')
            ->orderBy('bands.band_name', 'asc')
            ->where('songs.final', 1)
            ->get();

    // echo json_encode($songs[0]);


    // print_r();

    return view('admin/top32', [
      'page'  => 'top32',
      'songs' => $songs
    ]);
  }

  public function edit($id){
    $count = Band::where('id', $id)->count();

    if($count){

      $band = Band::findOrFail($id);

      $members = $band->members()->get();

      $songs = $band->songs()->get();

      return view('admin/editband', [
        'page'    => 'top32',
        'band'    => $band,
        'members' => $members,
        'songs'   => $songs
      ]);

    }else{
      // redirect( [$to, $status, $headers, $secure])
      return redirect()->to('/levis-tools/top32');
    }
  }

  public function update(Request $request, $id){

    if($request->foto){
      $image = $request->file('foto');
      $filename = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/foto');
      $image->move($destinationPath, $filename);

      // echo public_path().'/foto/'.$request->get('oldpic');
      // die();
      $path = public_path().'/foto/'.$request->get('oldpic');
      if(file_exists($path)) {
          unlink($path);
      }
    }else{

      $filename = $request->get('oldpic');
    }

    $band = Band::find($id);

    $band->band_name = $request->get('band_name');
    $band->cerita    = $request->get('cerita');
    $band->foto      = $filename;
    $band->genre     = $request->get('genre');
    $band->kota      = $request->get('kota');

    $band->save();

    $arraySong = [];
    for ($i=0; $i < count($request->get('judul')); $i++) {
      $song = Song::find($request->get('idsong')[$i]);

      $song->judul = $request->get('judul')[$i];
      $song->link  = $request->get('link')[$i];
      $song->lirik = $request->get('lirik')[$i];

      $song->save();

    }

    return redirect()->to('levis-tools/top32/edit/'.$id);
  }

}
