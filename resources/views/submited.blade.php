@extends('layouts.app')

@section('content')
<div class="wrap-image">
  <img class="responsive-img hide-on-small-only" src="{{ asset('images/banner.jpg') }}">
  <img class="hide-on-med-and-up responsive-img" src="{{ asset('images/banner-mobile.jpg') }}">
</div>
<div class="wrap-text margin-bottom-50">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="judul-page">
          PENDAFTARAN TELAH DITUTUP
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          <p>Nantikan pengumuman daftar 40 band yang lolos proses screening ke tahap semifinal pada 19 September 2017 di Facebook & Instagram Levi's&#174; Indonesia.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('footer')

@endsection
