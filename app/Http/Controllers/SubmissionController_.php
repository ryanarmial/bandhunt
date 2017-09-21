<?php

namespace App\Http\Controllers;

// use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Band;
use App\Song;
use App\Member;
use App\User;

class SubmissionController extends Controller{
    //
  public function __construct(){
    // $this->middleware('auth');

  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
   protected function validator(array $data){
      // if ( )) {
      //   echo 'ada bro';
      // }
      // echo "<pre>";
      // print_r($data);
      // die();

      $field = [
        'band_name'     => 'required|string|max:255',
        'foto'          => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'cerita'        => 'required|string',
        'info_bh'       => 'required|array',
        'genre'         => 'required|string',
        'kota'          => 'required|string',
        'member_name.*' => 'required|string|max:255',
        'email.*'       => 'required|string|email|max:255',
        'phone.*'       => 'required|numeric',
        'dob.*'         => 'required|date',
        'gender.*'      => 'required|not_in:0',
        'instrument.*'  => 'required|string',
        'uk_celana.*'   => 'required|not_in:0',
        'uk_baju.*'     => 'required|not_in:0',
        'judul.*'       => 'required|string',
        'link.*'        => 'required|string',
        'lirik.*'       => 'required|string',
      ];

      return Validator::make($data, $field);
   }
  public function index(){
    if(!Auth::guest()){
      $user = Band::where('user_id', Auth::user()->id)->first();
      if ($user) {
        return redirect()->to('/submited');
      }
    }
    return view('submission', ['page' => 'submission']);
  }
  public function saveband(Request $request){

    $member =  count($request->get('member_name'));
    $request->session()->put('member', $member);
    $song =  count($request->get('judul'));
    $request->session()->put('song', $song);

    // $data = Auth::user()->id;
    // print_r($data);
    // die();

    $this->validator($request->all())->validate();


    $image = $request->file('foto');
    $filename = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/foto');
    $image->move($destinationPath, $filename);

    $info_bh = '';
    foreach ($request->get('info_bh') as $inputbh) {
      $info_bh .= $inputbh.';';
    }

    $band = new Band([
      'band_name' => $request->get('band_name'),
      'foto'      => $filename,
      'cerita'    => $request->get('cerita'),
      'genre'     => $request->get('genre'),
      'kota'      => $request->get('kota'),
      'info_bh'   => $info_bh
    ]);


    $user = User::find(Auth::user()->id);

    $usersave = $user->band()->save($band);
    $usersave->id;

    $arrayMember = [];
    for ($i=0; $i < count($request->get('member_name')); $i++) {
      array_push($arrayMember, new Member([
        'member_name' => $request->get('member_name')[$i],
        'email'       => $request->get('email')[$i],
        'phone'       => $request->get('phone')[$i],
        'dob'         => $request->get('dob')[$i],
        'gender'      => $request->get('gender')[$i],
        'instrument'  => $request->get('instrument')[$i],
        'uk_celana'   => $request->get('uk_celana')[$i],
        'uk_baju'     => $request->get('uk_baju')[$i],
      ]));
    }

    $bandData = Band::find($usersave->id);

    $bandData->members()->saveMany($arrayMember);

    $arraySong = [];
    for ($i=0; $i < count($request->get('judul')); $i++) {
      array_push($arraySong, new Song([
        'judul' => $request->get('judul')[$i],
        'link'  => $request->get('link')[$i],
        'lirik' => $request->get('lirik')[$i],
      ]));
    }
    $bandData->songs()->saveMany($arraySong);

    return redirect()->to('/submited');

  }
}
