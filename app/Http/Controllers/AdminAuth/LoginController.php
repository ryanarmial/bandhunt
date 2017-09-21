<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class LoginController extends Controller{

  protected $redirectTo = '/levis-tools';

  use AuthenticatesUsers;

  protected function guard(){
    return Auth::guard('web_admin');
  }
  public function showLoginForm(){
    return view('admin.auth.login');
  }
  public function username(){
      return 'username';
  }
  public function logout(Request $request){

      $this->guard()->logout();

      $request->session()->invalidate();

      return redirect('/levis-tools/login');

  }

}
