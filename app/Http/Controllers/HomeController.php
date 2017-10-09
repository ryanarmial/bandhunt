<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Band;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

      $bands = DB::table('songs')
              ->select('bands.band_name', 'songs.judul', 'bands.foto', 'songs.id')
              ->join('bands', 'bands.id', '=', 'songs.band_id')
              ->where('songs.final', '=', 1)
              ->inRandomOrder()
              ->take(8)
              ->get();

      // return $bands;
      // return redirect()->to('/submission');
      return view('index', ['page' => 'home', 'bands' => $bands]);
    }
}
