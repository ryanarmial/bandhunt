<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuriController extends Controller
{
  public function index(){

    return redirect()->to('/');
  }
  public function umi(){

    return view('juriumi', ['page' => 'juri']);
  }
  public function maliq(){

    return view('jurimaliq', ['page' => 'juri']);
  }
  public function jan(){

    return view('jurijan', ['page' => 'juri']);
  }
  public function ricky(){

    return view('juriricky', ['page' => 'juri']);
  }
}
