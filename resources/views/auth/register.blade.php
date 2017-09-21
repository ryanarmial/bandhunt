@extends('layouts.app')

@section('content')
<div id="wrap-login" class="container">
  <div class="row">
    <div class="col s12 m6 offset-m3">
      <p class="center-align"><img src="{{ asset('images/logo-band.jpg') }}" alt=""></p>
      @if ($errors->any())
        <div class="card-panel red lighten-3">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
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
              <input id="password" type="password" class="validate" name="password" required>
              <label for="password">Kata Sandi</label>
            </div>
            <div class="input-field col s12">
              <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
              <label for="password-confirm">Konfirmasi Kata Sandi</label>
            </div>
          </div>
          <div class="row center-align">
            <button type="submit" class="btn btn-primary">
                Daftar
            </button>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection
