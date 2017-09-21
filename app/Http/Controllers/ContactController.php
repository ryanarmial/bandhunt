<?php

namespace App\Http\Controllers;

// use App\Order;
use App\Mail\SendContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ContactController extends Controller{

  protected function validator(array $data){

    $field = [
       'name'    => 'required|string|max:255',
       'email'   => 'required|string|email|max:255',
       'phone'   => 'required|numeric',
       'comment' => 'required|string',
    ];

    $messages = [
      'required' => ':attribute Harus Diisi.',
      'numeric' => ':attribute Harus Diisi dengan angka.',
    ];

     return Validator::make($data, $field, $messages);
  }

  public function index(){
    return view('contact', [
      'page' => 'contact',
      'status' => false
    ]);
  }
  public function sendContact(Request $request){

    $this->validator($request->all())->validate();

    $comment = 'Nama: '.$request->get('name').'\n Email: '.$request->get('email').'\n Phone: '.$request->get('phone').'\n Comment: \n'.$request->get('comment');

    Mail::to($request->get('email'))->send(new SendContactMail($request->all()));

    return redirect()->route('contact', ['status' => true]);
  }
}
