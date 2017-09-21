<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Admin;
use Auth;

class RegisterController extends Controller{

  protected $redirectPath = 'levis-tools';

  public function showRegistrationForm(){

    return view('admin.auth.register');
  }
  public function register(Request $request){

    $this->validator($request->all())->validate();

    //Create admin
    $admin = $this->create($request->all());

    //Authenticates admin
    $this->guard()->login($admin);

    //Redirects admin
    return redirect($this->redirectPath);

  }
  protected function validator(array $data){
    return Validator::make($data, [
      'name'     => 'required|max:255',
      'username' => 'required|max:20|unique:admins',
      'email'    => 'required|email|max:255|unique:admins',
      'position' => 'required|max:255',
      'password' => 'required|min:6|confirmed',
    ]);
  }
  protected function create(array $data){
    return Admin::create([
        'name'     => $data['name'],
        'username' => $data['username'],
        'email'    => $data['email'],
        'position' => $data['position'],
        'password' => bcrypt($data['password']),
    ]);
  }
  protected function guard(){
    return Auth::guard('web_admin');
  }
}
