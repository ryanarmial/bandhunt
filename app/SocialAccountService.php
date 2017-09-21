<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Http\Request;

class SocialAccountService{
  public function getUser(ProviderUser $providerUser){

    $account = SocialAccount::whereProvider('facebook')
        ->whereProviderUserId($providerUser->getId())
        ->first();

    if ($account) {
      return $account->user;
    } else {
      return false;

    }

  }
  public function createUser(array $data, ProviderUser $providerUser){


    // echo "<pre>";
    // print_r($socialValue);
    // die();
    $account = new SocialAccount([
      'provider_user_id' => $providerUser->getId(),
      'provider'         => 'facebook'
    ]);

    $user = User::whereEmail($providerUser->getEmail())->first();

    if (!$user) {

      $user = User::create([
        'email'    => $data['email'],
        'name'     => $data['name'],
        'password' => bcrypt($data['password']),
        'phone'    => $data['phone'],
      ]);
    }

    $account->user()->associate($user);
    $account->save();

    return $user;
  }
}
