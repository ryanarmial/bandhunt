@extends('layouts.app')

@section('content')
<div id="wrap-login" class="container">
  <div class="row">
    <div class="col s12 m6 offset-m3">
      <p class="center-align"><img src="{{ asset('images/logo-band.jpg') }}" alt=""></p>
      @if ($errors->has('email'))
        <div class="card-panel red lighten-3"><strong>{{ $errors->first('email') }}</strong></div>
      @endif
      @if ($errors->has('password'))
        <div class="card-panel red lighten-3"><strong>{{ $errors->first('password') }}</strong></div>
      @endif
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
              <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
              <label for="email">Email</label>
            </div>

            <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" class="validate" name="password" required>
              <label for="password">Password</label>
            </div>
            <div class="col s6 input-field right-align">
              <button type="submit" class="btn btn-primary">
                  Login
              </button>
            </div>
            <!-- <div class="col m6 input-field ">
              <input type="checkbox" class="filled-in" id="filled-in-box" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="filled-in-box">Ingat Saya</label>
            </div> -->
            <div class="col s6 input-field ">
              <!-- <input type="checkbox" class="filled-in" id="filled-in-box" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="filled-in-box">Ingat Saya</label> -->
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  Lupa Password?
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col s12 input-field">
              Belum daftar? Register
              <a class="" href="{{ route('register') }}">
                di sini
              </a>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col m8 offset-m2">
              <a class="fb-login" href="redirect"><i class="fa fa-facebook" aria-hidden="true"></i> Masuk Dengan Facebook</a>
            </div>
          </div> -->
      </form>
    </div>
  </div>
</div>
@endsection
