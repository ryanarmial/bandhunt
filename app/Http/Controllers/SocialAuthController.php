<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;


class SocialAuthController extends Controller{
    //
  public function redirect(){
    return Socialite::driver('facebook')->redirect();
  }

  public function callback(SocialAccountService $service, Request $request){

    $providerUser = Socialite::driver('facebook')->user();

    $user = $service->getUser($providerUser);

    if($user){
      auth()->login($user);

      return redirect()->to('/submission');
    }else{
      $request->session()->put('fb', $providerUser);

      return redirect()->to('/registersocial');
    }


    // auth()->login($user);

    // return redirect()->to('/home');

  }

  public function registersocial(Request $request){

    if ($request->session()->has('fb')) {
      $socialValue = $request->session()->get('fb');

      return view('auth.register', [
        'page'  => 'Register',
        'name'  => $socialValue->name,
        'email' => $socialValue->email
      ]);
    }

    redirect()->to('/register');

    // print_r($socialValue);
    // die();

  }

  public function saveregister(SocialAccountService $service, Request $request){
    $providerUser = $request->session()->get('fb');
    $dataUser = $request->all();
    $user = $service->createUser($dataUser,$providerUser);
    if($user){
      auth()->login($user);

      return redirect()->to('/submission');
    }else{
      return redirect()->to('/login');
    }
  }

}
