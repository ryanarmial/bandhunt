<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Band;
use App\Song;

class AdminController extends Controller{

  public function index(){

    $totalUser = User::count();
    $totalBand = Band::count();
    $totalSong = Song::count();

    return view('admin/dashboard', [
      'page'      => 'dashboard',
      'totaluser' => $totalUser,
      'totalband' => $totalBand,
      'totalsong' => $totalSong
    ]);

  }

}
