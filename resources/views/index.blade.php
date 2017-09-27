@extends('layouts.app')

@section('content')
<div class="wrap-image">
  <div class="row">
    @foreach($bands as $band)
    <div class="col s3 band-banner" style="background-image:url(http://levi.co.id/band-hunt/public/foto/{{$band->foto}})"></div>
    @endforeach
  </div>
  <div class="wrap-img-banner">
    <img class="responsive-img hide-on-small-only" src="{{ asset('images/home-logo.png') }}">
    <img class="hide-on-med-and-up responsive-img" src="{{ asset('images/home-logo.png') }}">
  </div>
  <div class="btn-cta">
    <ul>
      <li><a href="{{ route('vote') }}">VOTE NOW</a></li>
      <!-- <li><a href="{{ route('submission') }}">SUBMIT NOW</a></li> -->
    </ul>
    <!-- <ul class="btn-pop-head">
      <li><a href="{{ route('popup') }}">LEVI'S&#174; POP UP STUDIO</a></li>
    </ul> -->
  </div>
</div>
<div class="wrap-text margin-bottom-50">
  <div class="container">
    <div class="row margin-bottom-50">
      <div class="video-container">
       <iframe src="https://www.youtube.com/embed/7UDwaCOjucQ?rel=0" frameborder="0" allowfullscreen></iframe>
     </div>
    </div>
    <div id="band-hunt" class="row">
      <div class="col s12">
        <div class="judul-page">
          APA SIH Levi's&#174; BAND HUNT?
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          Levi’s&#174; Band Hunt adalah audisi digital pertama untuk berburu band-band muda terbaik di Indonesia. Mengambil filosofi "Authentic Self Expression", kampanye ini bertujuan untuk mencari band independent dengan lagu asli dari genre apapun yang paling unik dan otentik di seluruh Indonesia. Kini saatnya tunjukkan pada seluruh Indonesia kalau band kamu memiliki keunikan tersendiri, berbeda dari yang lain. Raih kesempatan jadi band beken dan mendapatkan record deal dari Universal Music Indonesia, uang tunai, dan juga paket produk dari Levi’s&#174; untuk seluruh anggota band!
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
