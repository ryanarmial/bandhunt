<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Band;

class VoteController extends Controller{

  public function index(){

    $bands = Band::orderBy('created_at', 'desc')->take(12)->get();

    // return redirect()->to('/submission');
    return view('index', ['page' => 'home', 'bands' => $bands]);
  }

}
