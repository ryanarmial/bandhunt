@extends('layouts.app')

@section('content')
<div class="wrap-text margin-bottom-50">
  <div class="container">
    <div id="contact-levis" class="row">
      <div class="col s12 margin-bottom-20">
        <p class="center-align"><img src="{{ asset('images/logo-band.jpg') }}" alt=""></p>
        <div class="judul-page">
          CONTACT US
        </div>
      </div>
      <div class="col s12">
        @if ($errors->any())
          <div class="card-panel red darken-4 col s8 offset-s2 margin-bottom-20">
            <ul>
              @foreach ($errors->all() as $error)
                  <li style="color:#fff">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if ($status)
          <div class="card-panel light-blue darken-4 col s8 offset-s2 margin-bottom-20">
            <h3>Pesan anda telah dikirim silahkan tunggu balasan dari kami.</h3>
          </div>
        @endif
        <div class="col s8 offset-s2">
          <form class="form-horizontal" method="POST" action="{{ route('contact') }}">
              {{ csrf_field() }}
              <div class="row">
                <div class="input-field col s12">
                  <input id="name" type="text" class="validate" name="name" value="{{ isset($name) ? $name : old('name') }}" required>
                  <label for="name">Nama</label>
                </div>

                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" name="email" value="{{ isset($email) ? $email : old('email') }}" required>
                  <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                  <input id="phone" type="text" class="validate" name="phone" value="{{ isset($phone) ? $phone : old('phone') }}" required>
                  <label for="phone">Telepon</label>
                </div>
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea" name="comment">{{ isset($phone) ? $phone : old('phone') }}</textarea>
                  <label for="textarea1">Pesan</label>
                </div>
              </div>
              <div class="row center-align">
                <button type="submit" class="btn btn-primary">
                    KIRIM
                </button>
              </div>
          </form>
        </div>
      </div>
      <div id="wrap-social-contact" class="col s12 margin-top-50">
        <div class="col s4"><a href="https://www.instagram.com/levis_indonesia/" target="_blank"><i class="fa fa-instagram"></i></a></div>
        <div class="col s4"><a href="https://www.facebook.com/levis.indonesia/" target="_blank"><i class="fa fa-facebook"></i></a></div>
        <div class="col s4"><a href="https://twitter.com/LevisID" target="_blank"><i class="fa fa-twitter"></i></a></div>
      </div>
    </div>
  </div>
</div>
@endsection
